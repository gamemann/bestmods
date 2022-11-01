<div class="text-white m-7">
    @if (!$mod)
    <h1 class="text-3xl font-bold mb-4">Not Found</h1>
    <p>Mod not found. Please check the URL.</p>
    @else
        <div id="mod">
            <div id="modHeader">
                <div id="modImage" class="flex justify-center">
                    <img class="rounded-t max-w-md md:max-w-3xl" src="{{ isset($headinfo['image']) ? $headinfo['image'] : Illuminate\Support\Facades\URL::to('/images/mods/default.png') }}" />
                </div>
                <div id="modName" class="flex justify-center">
                    <h1 class="text-4xl font-bold mb-4">{{ $mod->name }}</h1>
                </div>
            </div>

            <div id="modButtons">
                <div class="flex justify-center">
                <button data-view-btn data-show-id="overview" class="viewBtn text-white font-bold rounded-t p-3 mr-1 bg-gray-900{{ $view == 'overview' ? ' viewSel' : '' }}">
                    Overview
                </button>
                <button data-view-btn data-show-id="install" class="viewBtn text-white font-bold rounded-t p-3 mr-1 bg-gray-900{{ $view == 'install' ? ' viewSel' : '' }}">
                    Installation
                </button>
                <button data-view-btn data-show-id="downloads" class="viewBtn text-white font-bold rounded-t p-3 mr-1 bg-gray-900{{ $view == 'downloads' ? ' viewSel' : '' }}">
                    Downloads
                </button>
                </div>
                <div id="modContent" class="boxView p-5">
                    <div id="viewContent"></div>
                    <div data-view data-id="overview" class="hidden">
                        {{ isset($desc) ? $desc : 'No description found.' }}
                    </div>
                    <div data-view data-id="install" class="hidden">
                        <p>{{ isset($install_help) ? $install_help : 'No installation help found.' }}</p>
                    </div>
                    <div data-view data-id="downloads" class="hidden">
                        <p>
                            @if (isset($downloads) && is_array($downloads))
                                @foreach ($downloads as $download)
                                    <a class="modDownload" href="{{ $download->url }}" target="_blank">{{ $download->name }}</a>
                                @endforeach
                            @else
                                No downloads found.
                            @endif
                        </p>
                    </div>
                </id>
            </div>
        </div>
    @endif
</div>