@extends("profile.master")

@section("name", "Samuel")

@section("fullName", "Samuel Sebastian")


@section("major", "Computer Science and Statistics")


@section("univ", "Bina Nusantara, Jakarta")


@section("email", "samuel.christlie@binus.ac.id")


@section("bday", "June 25")


@section("course", "Web Programming")

@section("skill", "Reading")


@section("description", "I'm Sam, a 20-year-old student studying Computer Science and Statistics. I'm really interested in how technology and data can be used together to solve complex problems, and I'm excited to be pursuing this area of study. I'm a hardworking and dedicated student, always looking to learn new concepts and explore innovative ideas. In my free time, I like to code and experiment with new programming languages. I also enjoy reading and playing video games. Overall, I'm passionate about using my skills to make a positive impact in the world.")


@section("extraContent")
 <hr>
 <button class="btn btn-primary" onclick="document.location='/chat/'">Contact me!</button>

@endsection

@section("picture")
 <img src="../pemanasan/public/img/samuel.jpg" class="rounded-4 shadow" alt="Samuel Sebastian" style="max-width: 70%;">

@endsection

