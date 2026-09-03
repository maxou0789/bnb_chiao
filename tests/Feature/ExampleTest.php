<?php

namespace Tests\Feature;

use App\Livewire\ContactForm;
use App\Livewire\StayCatalog;
use App\Models\Inquiry;
use App\Models\Stay;
use Database\Seeders\StaySeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(StaySeeder::class);
    }

    public function test_the_showcase_page_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('April Chiao');
        $response->assertSee('Capturing the Essence of Effortless Luxury');
        $response->assertSee('Discerning Travelers');
        $response->assertSee('Villa Azure');
    }

    public function test_stay_catalog_can_filter_by_category(): void
    {
        Livewire::test(StayCatalog::class)
            ->assertSee('Villa Azure')
            ->set('activeCategory', 'villa')
            ->assertSee('Villa Azure')
            ->set('search', 'Yilan')
            ->assertSee('Villa Azure')
            ->call('selectStay', 1)
            ->assertSet('selectedStayId', 1)
            ->call('closeModal')
            ->assertSet('selectedStayId', null);
    }

    public function test_contact_form_validates_and_creates_inquiry(): void
    {
        \Illuminate\Support\Facades\Mail::fake();

        Livewire::test(ContactForm::class)
            ->set('name', 'Sophie Dupont')
            ->set('brand_name', 'Maison Luxe Hotel')
            ->set('email', 'sophie@maisonluxe.fr')
            ->set('phone', '+33 6 12 34 56 78')
            ->set('project_type', 'hotel_review')
            ->set('budget_range', 'usd_2k_5k')
            ->set('timeline', '2026 Q4')
            ->set('message', 'We would love to invite April for an exclusive 3-day luxury stay and cinematic Reel review.')
            ->call('submit')
            ->assertHasNoErrors()
            ->assertSet('isSubmitted', true);

        $this->assertDatabaseHas('inquiries', [
            'name' => 'Sophie Dupont',
            'email' => 'sophie@maisonluxe.fr',
            'brand_name' => 'Maison Luxe Hotel',
        ]);

        \Illuminate\Support\Facades\Mail::assertSent(\App\Mail\InquiryReceived::class);
    }
}
