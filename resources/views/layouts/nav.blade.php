<nav class="w-full flex bg-white fixed z-10 top-0 h-12">

    <div class="brand w-3/12 h-12 pointer-events-none">
        <?xml version="1.0" encoding="UTF-8" standalone="no"?>
        <!-- Created with Inkscape (http://www.inkscape.org/) -->
        
        <svg
           xmlns:dc="http://purl.org/dc/elements/1.1/"
           xmlns:cc="http://creativecommons.org/ns#"
           xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
           xmlns:svg="http://www.w3.org/2000/svg"
           xmlns="http://www.w3.org/2000/svg"
           xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
           xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
           width="91.202003mm"
           height="18.899mm"
           viewBox="0 0 91.202003 18.899"
           version="1.1"
           id="svg8"
           inkscape:version="0.92.3 (2405546, 2018-03-11)"
           sodipodi:docname="u-connect.svg"
           class="h-6 mt-3">
          <defs
             id="defs2" />
          <sodipodi:namedview
             id="base"
             pagecolor="#ffffff"
             bordercolor="#666666"
             borderopacity="1.0"
             inkscape:pageopacity="0.0"
             inkscape:pageshadow="2"
             inkscape:zoom="1.4"
             inkscape:cx="268.92741"
             inkscape:cy="81.583998"
             inkscape:document-units="mm"
             inkscape:current-layer="layer1"
             showgrid="false"
             inkscape:snap-center="true"
             inkscape:snap-page="true"
             inkscape:window-width="1366"
             inkscape:window-height="705"
             inkscape:window-x="-8"
             inkscape:window-y="-8"
             inkscape:window-maximized="1" />
          <metadata
             id="metadata5">
            <rdf:RDF>
              <cc:Work
                 rdf:about="">
                <dc:format>image/svg+xml</dc:format>
                <dc:type
                   rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                <dc:title></dc:title>
              </cc:Work>
            </rdf:RDF>
          </metadata>
          <g
             inkscape:label="Layer 1"
             inkscape:groupmode="layer"
             id="layer1"
             transform="translate(0,-278.101)">
            <text
               xml:space="preserve"
               style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:24.49700165px;line-height:0.5;font-family:sans-serif;-inkscape-font-specification:'sans-serif Bold';letter-spacing:0px;word-spacing:0px;fill:#2a7fff;fill-opacity:1;stroke:none;stroke-width:0.61242515"
               x="-2.0211284"
               y="286.39145"
               id="text817"
               transform="scale(0.96562379,1.0356)"><tspan
                 sodipodi:role="line"
                 id="tspan815"
                 x="-2.0211284"
                 y="286.39145"
                 style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:sans-serif;-inkscape-font-specification:'sans-serif Bold';fill:#2a7fff;stroke-width:0.61242515">U-</tspan></text>
            <rect
               style="opacity:1;fill:#2a7fff;fill-opacity:1;stroke:none;stroke-width:0.5;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1"
               id="rect823"
               width="61.232143"
               height="18.898809"
               x="29.96986"
               y="278.10098"
               ry="5.2916665" />
            <text
               xml:space="preserve"
               style="font-style:italic;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:14.86065197px;line-height:0.5;font-family:sans-serif;-inkscape-font-specification:'sans-serif Bold Italic';letter-spacing:0px;word-spacing:0px;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.37151629"
               x="31.815186"
               y="292.74945"
               id="text821"><tspan
                 sodipodi:role="line"
                 id="tspan819"
                 x="31.815186"
                 y="292.74945"
                 style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:'Segoe UI';-inkscape-font-specification:'Segoe UI Bold';fill:#ffffff;stroke-width:0.37151629">Connect</tspan></text>
          </g>
        </svg>
        </div>

    <div class="w-6/12">
        <input type="text" class="w-full h-full px-6 font-hairline text-lg bg-transparent" style="outline:none" placeholder="Type to search.." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Type to search..'">
    </div>

    <div class="w-3/12 flex">
        <button class="flex px-2 py-2 text-center hover:bg-gray-300" id="more">
            <div class="my-auto pr-2 text-gray-700"><i class="fas fa-angle-down"></i></div>
            <img src="{{ asset('zondicons') }}/{{ Auth::user()->pic }}" class="rounded-full w-6 h-6 mx-3 mt-1">
            {{-- Dropdown --}}
            <div class="dropdown shadow hidden bg-white rounded-b-lg z-30 absolute w-56 justify-center -ml-2 mt-10" id="dropdown">
                <a href="">
                    <div class="text-center font-semibold text-gray-600 hover:text-gray-800 hover:bg-gray-300 rounded-lg m-2 py-2">
                    Setting
                    </div>
                </a>
                <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <div class="text-center font-semibold text-red-600 hover:text-white hover:bg-red-500 rounded-lg m-2 py-2">
                        Log out
                    </div>
                </a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="post" style="display:none">
                @csrf
            </form>
        </button>
        <div class="py-3 text-gray-700 pointer-events-none">
            <p>{{Auth::user()->name}}</p>
        </div>
    </div>
</nav>

