@extends('app')

@section('tittle') <h1> Contáctanos </h1> @endsection

@section('content')

<div class='one-third column'>
  <img src='images/misc/about_us.png'>
  <h3>About Us</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
</div>


<div class='one-third column'>
  <img src='images/misc/team.png'>
  <h3>The Team</h3>
  <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur.</p>
</div>



<div class='one-third column'>
  <img src='images/misc/goals.png'>
  <h3>Goals</h3>
  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

  <div class='sixteen columns form'>
    <h3>Drop the beat wub dub dub</h3>
    <p>Go ahead, write something. Send it, wait untill we response.</p>
    <form>
      <label>Your name, dude</label>
      <input type='text' name='name' placeholder='Name or last name'>
      <label>Now, where should we replay?</label>
      <input type='text' name='mail' placeholder='Your e-mail address'>
      <label>The hard part. Message</label>
      <textarea cols='50' rows='15' name='message'></textarea>
      <input type='submit' value='Let it fly!'>
    </form>
  </div>
@endsection
