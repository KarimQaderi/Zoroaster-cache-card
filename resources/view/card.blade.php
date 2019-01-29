<div class="ZoroasterCard">
    <div uk-grid>
        <div class="uk-width-auto">
            <a href="{{ route('ZoroasterCacheCard.flush') }}" class="uk-button-primary">Flush</a>
        </div>
        <div class="uk-width-expand uk-text-left">
            <h2>{{ $defaultDriver }} Cache</h2>
            <h4>Size {{ $cacheSize }}</h4>
            <h7>Folder Count {{ $CountFile }} And File Count {{ $CountFile }}</h7>
        </div>
    </div>
</div>