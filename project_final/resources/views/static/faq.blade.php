@extends('template.static_template')

@section('content')

<!-- FAQ Information -->
    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">FAQ</h2>
        <div class="col-lg-12 order-lg-1 my-auto showcase-text">

            <h5> <a href="javascript:toggleElement('a1')"> How can I add a project to my platform? </a> </h5>
            <p><div id="a1" style="display:none">Go to Projects Page and click in “Create New Project" </div></p>
            <h5> <a href="javascript:toggleElement('a2')"> What happens if I lose my password?</a> </h5>
            <p><div id="a2" style="display:none">You can go to Sign in -> Forgot your Password? -> Insert your email, and that’s it!</div></p>
            <h5> <a href="javascript:toggleElement('a3')"> How can I search to a project? </a> </h5>
            <p><div id="a3" style="display:none">Go to Projects Page and click on the search bar. There you can enter some caracteres and our system will find it! </div></p>

         </div>
      </div>
    </section>

<script>function toggleElement(id)
{
    if(document.getElementById(id).style.display == 'none')
    {
        document.getElementById(id).style.display = '';
    }
    else
    {
        document.getElementById(id).style.display = 'none';
    }
}
</script>

@endsection