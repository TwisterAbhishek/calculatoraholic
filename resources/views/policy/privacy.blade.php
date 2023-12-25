@extends('template')

@section('head')
    <title>Privacy Policy | {{env('APP_NAME')}}</title>
@endsection

@section('body')
<div class="container p-5">
    <h1 class="mb-4">Privacy Policy</h1>

    <section>
        <h2>Introduction</h2>
        <p>This Privacy Policy outlines how {{env('APP_NAME')}} collects, uses, maintains, and discloses information collected from users of our website.</p>
    </section>
    <section>
        <h2>Information We Collect</h2>
        <p>We may collect personal identification information from users in various ways, including but not limited to when users visit our site, register on the site, fill out a form, and in connection with other activities, services, features, or resources we make available.</p>
    </section>
    <section>
        <h2>How We Use Collected Information</h2>
        <p>We may use the information we collect for purposes such as...</p>
    </section>
    <section>
        <h2>Sharing Your Personal Information</h2>
        <p>We do not sell, trade, or rent users' personal identification information to others. We may share generic aggregated demographic information not linked to any personal identification information regarding visitors and users.</p>
    </section>
    <section>
        <h2>Security</h2>
        <p>We implement security measures to protect against unauthorized access, alteration, disclosure, or destruction of your personal information and data stored on our site.</p>
    </section>
    <section>
        <h2>Changes to this Privacy Policy</h2>
        <p>{{env('APP_NAME')}} has the discretion to update this privacy policy at any time. We encourage users to frequently check this page for any changes to stay informed about how we are helping to protect the personal information we collect.</p>
    </section>
    <section>
        <h2>Contacting Us</h2>
        <p>If you have any questions about this Privacy Policy, the practices of this site, or your dealings with this site, please contact us at info@calculatorholic.com</p>
    </section>
</div>
@endsection