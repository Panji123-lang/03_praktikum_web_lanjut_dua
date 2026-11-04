@extends('layouts.app')

@section('title', 'Halaman News')

@section('content')
    <h1>Daftar Berita</h1>
    <p>Ini adalah halaman untuk menampilkan daftar berita terbaru dari database.</p>
    
    <hr>
    @foreach($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
        </div>
    @endforeach
@endsection

