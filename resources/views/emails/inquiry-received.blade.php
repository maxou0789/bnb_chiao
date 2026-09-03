<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Collaboration Inquiry</title>
</head>
<body style="margin:0; padding:0; background-color:#FAF6F0; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color:#231E1B;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color:#FAF6F0; padding:40px 15px;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0" style="max-width:600px; width:100%; background-color:#ffffff; border-radius:16px; overflow:hidden; border:1px solid #E8DCCF; box-shadow:0 4px 20px rgba(0,0,0,0.04);">
                    
                    <!-- Header -->
                    <tr>
                        <td style="background-color:#181412; padding:32px 30px; text-align:center;">
                            <h1 style="margin:0 0 6px 0; color:#FAF6F0; font-size:24px; font-weight:500; letter-spacing:1px; font-family:Georgia, serif;">April Chiao</h1>
                            <p style="margin:0; color:#E6C5BA; font-size:12px; letter-spacing:2px; text-transform:uppercase;">New Collaboration Inquiry Received</p>
                        </td>
                    </tr>

                    <!-- Body Content -->
                    <tr>
                        <td style="padding:35px 35px 25px 35px;">
                            <p style="margin:0 0 20px 0; font-size:15px; line-height:1.6; color:#70645D;">
                                You have received a new collaboration request from your website (<a href="https://www.instagram.com/bnb_chiao" style="color:#B38F60; text-decoration:none;">@bnb_chiao</a>).
                            </p>

                            <!-- Key Information Box -->
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color:#FAF6F0; border-radius:12px; border:1px solid #E8DCCF; margin-bottom:25px;">
                                <tr>
                                    <td style="padding:20px;">
                                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tr>
                                                <td style="padding:6px 0; font-size:12px; color:#9C8F87; text-transform:uppercase; letter-spacing:1px; width:140px; font-weight:600;">Contact Person:</td>
                                                <td style="padding:6px 0; font-size:14px; color:#231E1B; font-weight:600;">{{ $inquiry->name }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:6px 0; font-size:12px; color:#9C8F87; text-transform:uppercase; letter-spacing:1px; font-weight:600;">Brand / Hotel:</td>
                                                <td style="padding:6px 0; font-size:14px; color:#231E1B; font-weight:600;">{{ $inquiry->brand_name }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:6px 0; font-size:12px; color:#9C8F87; text-transform:uppercase; letter-spacing:1px; font-weight:600;">Email Address:</td>
                                                <td style="padding:6px 0; font-size:14px; color:#B38F60; font-weight:600;"><a href="mailto:{{ $inquiry->email }}" style="color:#B38F60; text-decoration:underline;">{{ $inquiry->email }}</a></td>
                                            </tr>
                                            @if($inquiry->phone)
                                            <tr>
                                                <td style="padding:6px 0; font-size:12px; color:#9C8F87; text-transform:uppercase; letter-spacing:1px; font-weight:600;">Phone / LINE:</td>
                                                <td style="padding:6px 0; font-size:14px; color:#231E1B;">{{ $inquiry->phone }}</td>
                                            </tr>
                                            @endif
                                            <tr>
                                                <td style="padding:6px 0; font-size:12px; color:#9C8F87; text-transform:uppercase; letter-spacing:1px; font-weight:600;">Collaboration Type:</td>
                                                <td style="padding:6px 0; font-size:14px; color:#231E1B;">{{ ucfirst(str_replace('_', ' ', $inquiry->project_type)) }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:6px 0; font-size:12px; color:#9C8F87; text-transform:uppercase; letter-spacing:1px; font-weight:600;">Budget Range:</td>
                                                <td style="padding:6px 0; font-size:14px; color:#231E1B;">{{ $inquiry->budget_range ?? 'To Be Discussed' }}</td>
                                            </tr>
                                            @if($inquiry->timeline)
                                            <tr>
                                                <td style="padding:6px 0; font-size:12px; color:#9C8F87; text-transform:uppercase; letter-spacing:1px; font-weight:600;">Target Timeline:</td>
                                                <td style="padding:6px 0; font-size:14px; color:#231E1B;">{{ $inquiry->timeline }}</td>
                                            </tr>
                                            @endif
                                        </table>
                                    </td>
                                </tr>
                            </table>

                            <!-- Message Section -->
                            <h3 style="margin:0 0 10px 0; font-size:13px; text-transform:uppercase; letter-spacing:1.5px; color:#B38F60; font-weight:600;">Project Message & Vision</h3>
                            <div style="background-color:#ffffff; border-left:3px solid #C8AA82; padding:15px; margin-bottom:30px; font-size:14px; line-height:1.7; color:#231E1B; white-space:pre-wrap;">{{ $inquiry->message }}</div>

                            <!-- Reply CTA Button -->
                            <div style="text-align:center; padding-top:10px;">
                                <a href="mailto:{{ $inquiry->email }}?subject=Re:%20Collaboration%20Inquiry%20-%20April%20Chiao%20(@bnb_chiao)" style="display:inline-block; background-color:#231E1B; color:#FAF6F0; padding:14px 32px; border-radius:30px; text-decoration:none; font-size:13px; font-weight:600; letter-spacing:1.5px; text-transform:uppercase;">Reply to {{ $inquiry->name }}</a>
                            </div>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color:#FAF6F0; border-top:1px solid #E8DCCF; padding:20px; text-align:center; font-size:11px; color:#9C8F87;">
                            <p style="margin:0 0 4px 0;">April Chiao • Hotel & Travel UGC Creator (@bnb_chiao)</p>
                            <p style="margin:0;">Received on {{ date('F j, Y, g:i a') }}</p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
