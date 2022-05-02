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
        <h3>
            <button class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                  </svg>
            </button>
        </h3>
    </div>
</div>