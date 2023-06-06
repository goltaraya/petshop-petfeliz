@extends('templates.main')
@section('title', 'Home')
@section('content')

    <div class="container">
        <table>
            <tr>
                <td class="align-items-start">
                    <img class="welcome-page-img-dog" src="{{ asset('img/welcome-page/cachorro-tela-azul.jpg') }}" alt="">
                </td>
                <td class="p-table">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat magna ligula, eget convallis
                        diam finibus a. Pellentesque pulvinar urna sed neque sodales suscipit. Donec diam ante, lobortis ac
                        pulvinar at, elementum ut mauris. Sed feugiat at nisi non iaculis. Integer at venenatis risus, ac
                        ultricies
                        leo. Pellentesque et porta lorem. Aliquam ornare placerat dui at posuere. Cras sed cursus lorem, vel
                        cursus elit. In sed imperdiet nisl. Duis dapibus, urna eget convallis varius, neque eros vehicula
                        mauris,
                        id posuere mi tellus nec enim. Pellentesque porta ex leo, non ultricies arcu fermentum a. Aliquam
                        magna
                        lectus, mollis ac efficitur in, mattis ac mauris. Curabitur viverra egestas lectus ut tristique. In
                        in ipsum diam.
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                        Phasellus eget pretium nulla, eu eleifend velit. Praesent non diam dui. Aliquam tincidunt, mi eget
                        imperdiet ultrices, massa nisi facilisis nulla, ut maximus purus tortor ac lacus. Suspendisse
                        vestibulum odio non sapien efficitur sagittis. Fusce eget enim eget magna facilisis tempus ut eget
                        lectus. Nulla placerat hendrerit elit, vel tristique risus fringilla at. In pulvinar, orci in
                        sagittis tempus, orci arcu mollis lectus, ac eleifend nibh tortor hendrerit turpis. Aliquam
                        consectetur erat nisi, eget porta odio fringilla id. Donec dictum elit vel dolor molestie feugiat.
                        Donec a dolor aliquam ipsum porta aliquet. Phasellus eleifend porta nisl, eu sagittis nibh pretium
                        sed. Donec hendrerit massa eros, nec blandit elit convallis ac. Interdum et malesuada fames ac ante
                        ipsum primis in faucibus. Maecenas sed egestas leo.
                    </p>
                </td>
                <td>
                    <img class="welcome-page-img-cat" src="{{ asset('img/welcome-page/gatinho-siames-tela-amarela.jpg') }}" alt="">
                </td>
            </tr>
        </table>
    </div>

@endsection
