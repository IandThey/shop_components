<div class="col mb-3">
    <div itemscope="" itemtype="https://schema.org/Product" class="card h-100 text-center shadow">
        <h2>
            <span itemprop="name">
                {{ $name_tovar }}
            </span>
        </h2>
        <a href="/katalog/tovars/{{ $id }}">
            <hr>
            <img itemprop="image" src="/img/t{{ $id }}.jpg" style="max-width: 300px;" class="card-img-top" loading="lazy">
            <hr>
        </a>
        <h3>
            <span itemprop="name">
                {{ $price_tovar }}
            </span>
            <span itemprop="name">
                Р
            </span>
        </h3>
    </div>
</div>