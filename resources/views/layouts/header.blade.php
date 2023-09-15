<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<x-message/>
<x-error/>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Welcome, {{ $name }}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/loader.css')}}">
    <link rel="stylesheet" href="{{ asset('css/btn.css')}}">
    <link rel="stylesheet" href="{{ asset('css/wel.css')}}">
</head>