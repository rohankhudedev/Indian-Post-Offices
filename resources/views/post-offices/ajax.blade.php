@extends('layouts.app')
{{-- This page lists Post offices uing API - api/post-offices/ --}}
@section('content')
    <table class="table table-striped table-hover" id="postOfficeTable">
        <thead>
        <tr>
            <th colspan="10" class="text-center">Listing Post offices from GET:/api/post-offices</th>
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
        </tbody>
        <tfoot>
        <tr>
            <th colspan="10" class="text-center">
                <div id="loader" style="display: none;">Loading...</div>
            </th>
        </tr>
        </tfoot>
    </table>
    <p>Current Page : <span id="currentPage">1</span></p>
    <nav>
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="javascript:void(0);" data-to="prev">Previous</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0);" data-to="next">Next</a>
            </li>
        </ul>
    </nav>

@endsection
