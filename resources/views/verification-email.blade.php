<h1>IPT Midterm</h1>

<p>
    Welcome {{$user->name}}!
</p>
<p>
    You've received this email to verify your registration in our website.
    Please click the link to verify your account.
</p>
<p>
    <a href="{{url('/verification/' . $user->id . "/" . $user->remember_token)}}">
        Click here to verify
    </a>
</p>