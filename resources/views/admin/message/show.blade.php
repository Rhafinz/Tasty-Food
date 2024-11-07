{{-- resources/views/messages/show.blade.php --}}
@extends('layouts.admin')

@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h3 class="card-title">Detail Pesan</h3>
        </div>
        <div class="card-body">
            <h4>Subject: {{ $message->subject }}</h4>
            <p><strong>Nama:</strong> {{ $message->name }}</p>
            <p><strong>Email:</strong> {{ $message->email }}</p>
            <p><strong>Pesan:</strong> {{ $message->message }}</p>
            <p><strong>Dikirim:</strong> {{ $message->created_at->setTimezone('Asia/Jakarta')->format('d M Y, H:i') }}</p>
        </div>
    </div>
@endsection
