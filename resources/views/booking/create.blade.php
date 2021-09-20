@extends('layouts.navbar')

@section('content')

    <main>
        <form action="{{ route('namesearch') }}" method="POST">
            @csrf
            <label for="">Enter customer email</label>
            <input type="email" name="email" placeholder="Enter customer email" value="{{ old('email') }}">
            <input type="submit" value="Select" name="name_search">
        </form>

        <form action="{{ route('booking.store') }}" method="POST">

            @csrf
            <div>
                @if ($patron = session('patron'))
                    <div>
                        <label for="">Customer</label>
                        <input type="hidden" name="patron_id" value="{{ $patron->patron_id }}"
                            class="@error('patron_id') is-invalid @enderror">
                    </div>
                    <div>
                        <p>First Name: {{ $patron->f_name }}</p>
                        <p>Last Name: {{ $patron->l_name }}</p>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="">
                        <p class=" alert alert-danger">
                        {{ session()->get('error') }}
                        </p>
                    </div>
                @endif
                @error('patron_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div>
                    <label>Reservation</label>
                    <select name="company_id" id="company">
                        @foreach ($reservations as $company)
                            <option value="{{ $company->company_id }}">{{ $company->company_name }}</option>
                        @endforeach
                    </select>

                    @error('company_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label>Hotel</label>
                    <select name="hotel_id" id="hotel">
                        @foreach ($hotels as $hotel)
                            <option value="{{ $hotel->hotel_id }}">{{ $hotel->hotel_name }}</option>
                        @endforeach
                    </select>

                    @error('hotel_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label>Program</label>
                    <select name="schedule_id" id="">
                        @foreach ($program_schedules as $program)
                            <option value="{{ $program->schedule_id }}">
                                {{ $program->p_name . ': ' . $program->exc_date }}</option>
                        @endforeach
                    </select>

                    @error('schedule_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="status">Status</label>
                    <select name="status" id="">
                        <option value="pending">Pending</option>
                        <option value="paid">Paid</option>
                    </select>

                    @error('status')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="payment_method">Payment Method</label>
                    <select name="payment_method" id="">
                        <option value="cash">Cash</option>
                        <option value="credit">Credit</option>
                    </select>

                    @error('payment_method')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="submit" value="Save">
                </div>
            </div>
        </form>
    </main>

@endsection
