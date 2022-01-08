@extends('layouts.app')
{{-- This page lists Post offices using Lumen Pagination --}}
@section('content')
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th colspan="10" class="text-center">Listing Post offices using Lumen Pagination</th>
        </tr>
        <tr>
            <th>Office Name</th>
            <th>Office Type</th>
            <th>Delivery Status</th>
            <th>Pincode</th>
            <th>Division</th>
            <th>Region</th>
            <th>Circle</th>
            <th>Taluk</th>
            <th>District</th>
            <th>State</th>
        </tr>
        </thead>
        <tbody>
        @foreach($postOffices as $office)
            <tr>
                <td>{{ $office->office_name }}</td>
                <td>{{ $office->office_type }}</td>
                <td>{{ $office->delivery_status }}</td>

                {{-- We can use null safe operator from PHP 8 : $office->pincode?->name --}}
                <td>{{ $office->pincode->name }}</td>
                <td>{{ $office->division->name }}</td>
                <td>{{ $office->region->name }}</td>
                <td>{{ $office->circle->name }}</td>
                <td>{{ $office->taluk->name }}</td>
                <td>{{ $office->district->name }}</td>
                <td>{{ $office->state->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $postOffices->links("pagination::bootstrap-4")}}

@endsection
