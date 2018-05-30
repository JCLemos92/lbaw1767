@extends('template.auth_static_template')

@section('content')

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-10 mx-auto">
          	<img class="img-fluid mb-2" width="400" height="342" src="img/ProPlanimage.svg" alt=""><p></p>
            <h1 class="mb-5">ProPlan is a way of planning your project, getting a wide view of it, wherever you are.</h1>
		</div>
          <div class="col-xl-9 mx-auto">
          	<h4 class="mb-5">Visualize every project you belong in one place. Get contact with your team. Receive notifications of progress. For free.</h4>
          </div>
          
          </div>
        </div>
      </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
              </div>
              <h3>Everything Online</h3>
              <p class="lead mb-0">Get and post the information you want at any time!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-primary"></i>
              </div>
              <h3>All in One</h3>
              <p class="lead mb-0">Get rid of papers. Help the environment!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3>Easy to Use</h3>
              <p class="lead mb-0">Uncomplicated design, just assign and we'll help you building or choosing a project.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">

          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.png');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>A small sample</h2>
            <p class="lead mb-0">This is an example of a ProPlan project. When creating you can choose the project's name, invite members and set up the privacy settings. This means your project can be visualized only for invited people or anyone authenticated in the plataform.</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.png');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>Features</h2>
            <p class="lead mb-0">Add tasks, assign for those you are able to do and give them a deadline. Don't worry about missing any changes of the project, the coordinator will be notified.</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.png');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Easy transmission</h2>
            <p class="lead mb-0">If comunication is needed you can count on a discussion forum for general info or focused in a especific subject.</p>
          </div>
        </div>
      </div>
    </section>

@endsection