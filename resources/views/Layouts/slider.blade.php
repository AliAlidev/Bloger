<div class="owl-carousel slide-one-item">
    @foreach (App\Models\slider::all() as $item)
        <div class="d-md-flex testimony-29101 align-items-stretch">
            <div class="image" style="background-image: url({{ asset($item->img) }});"></div>
            <div class="text">
                <blockquote>
                    <p>&ldquo;{{ $item->description }}&rdquo;</p>

                    <div class="author">&mdash; {{ $item->title }}</div>
                </blockquote>
            </div>
        </div> <!-- .item -->
    @endforeach
</div>
