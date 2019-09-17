<div class="row" id="motto">
    <div class="col-md-12 image-with-text-wrapper no-padding"
         style="background-image: url({{asset($viewModel->project->img_path)}});">
        <div class="gray-filter"></div>
        <div class="text">
            <h1 id="project-moto">{!! $viewModel->project->motto !!}</h1>
            <div class="col-md-2 col-md-offset-5 col-xs-6 col-xs-offset-3 call-to-action">

                @include("landingpages.partials.fair-eu.open-questionnaire-button")

            </div>
        </div>
    </div>
</div>