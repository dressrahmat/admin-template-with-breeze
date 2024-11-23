@extends('layouts.admin')
@section('content')
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-xl">
            <h3 class="font-semibold text-lg text-gray-800">Total Users</h3>
            <p class="text-2xl font-bold text-indigo-600">150</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-xl">
            <h3 class="font-semibold text-lg text-gray-800">Active Sessions</h3>
            <p class="text-2xl font-bold text-indigo-600">23</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-xl">
            <h3 class="font-semibold text-lg text-gray-800">Reports</h3>
            <p class="text-2xl font-bold text-indigo-600">Pending</p>
        </div>
    </div>
@endsection
