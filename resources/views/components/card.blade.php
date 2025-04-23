<div class="card" style="width: 18rem;">
    @if($image)
    <img src="{{ $image }}" class="card-img-top" alt="...">
    @endif
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $slot }}</p>
        @if($link)
        <a href="{{ $link }}" class="btn btn-primary">{{ $linkText ?? 'Go somewhere' }}</a>
        @endif
    </div>
</div>