@extends('template')

@section('head')
    <title>Terms & Conditions | {{env('APP_NAME')}}</title>
@endsection

@section('body')
<div class="container p-5">
    <h1 class="mb-4">Terms & Conditions</h1>

    <section>
        <h2>Introduction</h2>
        <p>Welcome to {{env('APP_NAME')}}. These terms and conditions outline the rules and regulations for the use of our website.</p>
    </section>
    <section>
        <h2>Website Use</h2>
        <p>By accessing this website, you agree to comply with these terms and conditions. If you disagree with any part of these terms, please do not use our website.</p>
    </section>
    <section>
        <h2>Intellectual Property</h2>
        <p>The content, trademarks, and intellectual property on this website are the property of {{env('APP_NAME')}}. You may not use, reproduce, or distribute the content without our permission.</p>
    </section>
    <section>
        <h2>Limitation of Liability</h2>
        <p>We shall not be held liable for any direct, indirect, incidental, consequential, or special damages arising out of or in any way connected with the use of our website.</p>
    </section>
    <section>
        <h2>Changes to Terms</h2>
        <p>We reserve the right to modify or replace these terms and conditions at any time. Your continued use of the website after any changes constitutes acceptance of those changes.</p>
    </section>
    <section>
        <h2>Governing Law</h2>
        <p>These terms and conditions shall be governed by and construed in accordance with the laws of India, and any disputes relating to these terms will be subject to the exclusive jurisdiction of the courts of India.</p>
    </section>
    <section>
        <h2>Contact Us</h2>
        <p>If you have any questions about these terms and conditions, please contact us at info@calculatorholic.com</p>
    </section>
</div>
@endsection