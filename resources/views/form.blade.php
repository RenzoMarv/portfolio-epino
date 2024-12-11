@extends('layouts.app')

@section('content')
    <div class="form-container">
        <h1>Form</h1>
        <form action="#" method="POST">
            @csrf
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="Enter your email"><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required placeholder="Enter your password"><br><br>

            <label for="firstname">Firstname:</label>
            <input type="text" id="firstname" name="firstname" required placeholder="Enter your firstname"><br><br>

            <label for="lastname">Lastname:</label>
            <input type="text" id="lastname" name="lastname" required placeholder="Enter your lastname"><br><br>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required placeholder="Enter your age" min="1" max="120"><br><br>

            <label for="birthdate">Birthdate:</label>
            <input type="date" id="birthdate" name="birthdate" required><br><br>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea><br><br>

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection