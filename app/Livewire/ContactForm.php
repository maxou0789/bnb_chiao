<?php

namespace App\Livewire;

use App\Mail\InquiryReceived;
use App\Models\Inquiry;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{
    #[Validate('required|min:2|max:100', message: ['required' => 'Please enter your name.', 'min' => 'Name must be at least 2 characters.'])]
    public string $name = '';

    #[Validate('required|min:2|max:150', message: ['required' => 'Please enter your brand, hotel, or company name.'])]
    public string $brand_name = '';

    #[Validate('required|email|max:150', message: ['required' => 'Please enter a valid business email address.', 'email' => 'Please enter a valid email address.'])]
    public string $email = '';

    #[Validate('nullable|string|max:50')]
    public string $phone = '';

    #[Validate('required|string', message: ['required' => 'Please select a collaboration format.'])]
    public string $project_type = 'hotel_review';

    #[Validate('nullable|string')]
    public string $budget_range = 'usd_2k_5k';

    #[Validate('nullable|string')]
    public string $timeline = '';

    #[Validate('required|min:10|max:2000', message: ['required' => 'Please provide project details (minimum 10 characters).', 'min' => 'Message must be at least 10 characters.'])]
    public string $message = '';

    public bool $isSubmitted = false;

    public function submit(): void
    {
        $this->validate();

        $inquiry = Inquiry::create([
            'name' => $this->name,
            'brand_name' => $this->brand_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'project_type' => $this->project_type,
            'budget_range' => $this->budget_range,
            'timeline' => $this->timeline,
            'message' => $this->message,
            'status' => 'pending',
        ]);

        // Send email notification to creator official inbox
        $recipientEmail = config('mail.from.address') ?: 'bnb.chiao@gmail.com';
        try {
            Mail::to($recipientEmail)->send(new InquiryReceived($inquiry));
        } catch (\Throwable $e) {
            Log::error('Failed to send contact inquiry notification email: ' . $e->getMessage());
        }

        $this->isSubmitted = true;
        $this->reset(['name', 'brand_name', 'email', 'phone', 'message', 'timeline']);
    }

    public function resetForm(): void
    {
        $this->isSubmitted = false;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
