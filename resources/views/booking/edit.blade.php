@extends('layouts.navbar')

@section('content')

    <main>
        <form action="{{ route('namesearch') }}" method="POST">
            @csrf
            <label for="">Enter customer email</label>
            <input type="email" name="email" placeholder="Enter customer email" value="{{ old('email') }}">
            <input type="submit" value="Select" name="name_search">
        </form>

        <form action="{{ route('booking.update', $booking->booking_id) }}" method="POST">
            @csrf
            @method('put')
            <div>
                @if ($patron = session('patron'))
                    {{-- If a new customer is selected --}}
                    <div>
                        <label for="">Customer</label>
                        <input type="hidden" name="patron_id" value="{{ $patron->patron_id }}"
                            class="@error('patron_id') is-invalid @enderror">
                    </div>
                    <div>
                        <p>First Name: {{ $patron->f_name }}</p>
                        <p>Last Name: {{ $patron->l_name }}</p>
                    </div>
                @else
                    {{-- The current customer --}}
                    <div>
                        <label for="">Customer</label>
                        <input type="hidden" name="patron_id" value="{{ $booking->patron_id }}"
                            class="@error('patron_id') is-invalid @enderror">
                    </div>
                    <div>
                        <p>First Name: {{ $current_patron->f_name }}</p>
                        <p>Last Name: {{ $current_patron->l_name }}</p>
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
                            <option value="{{ $company->company_id }}"
                                {{ $company->company_id != $booking->company_id ? '' : 'selected' }}>
                                {{ $company->company_name }}
                            </option>
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
                            <option value="{{ $hotel->hotel_id }}"
                                {{ $hotel->hotel_id != $booking->hotel_id ? '' : 'selected' }}>
                                {{ $hotel->hotel_name }}
                            </option>
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
                            <option value="{{ $program->schedule_id }}"
                                {{ $program->schedule_id != $booking->schedule_id ? '' : 'selected' }}>
                                {{ $program->p_name . ': ' . $program->exc_date }}
                            </option>
                        @endforeach
                    </select>

                    @error('schedule_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="status">Status</label>
                    <select name="status" id="">
                        <option value="pending" {{ $booking->status === 'pending' ? 'selected' : '' }}>
                            Pending
                        </option>
                        <option value="paid" {{ $booking->status === 'paid' ? 'selected' : '' }}>Paid</option>
                    </select>

                    @error('status')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="payment_method">Payment Method</label>
                    <select name="payment_method" id="">
                        <option value="cash" {{ $booking->payment_method === 'cash' ? 'selected' : '' }}>Cash</option>
                        <option value="credit" {{ $booking->schedule_id === 'credit' ? 'selected' : '' }}>Credit</option>
                    </select>

                    @error('payment_method')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="submit" value="Update">
                </div>
            </div>
        </form>
    </main>

@endsection
