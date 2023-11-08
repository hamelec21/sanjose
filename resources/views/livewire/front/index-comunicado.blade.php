<div>
    <div class="px-4">
        <div class="container mx-auto bg-amber-500 rounded-lg mt-5 mb-5 py-4 px-4 border-red-900 ">
          <div class="flex flex-col lg:flex-row justify-end px-5 py-4 ">
            <div class="flex space-x-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none " viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-800">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
              </svg>
              <div class="font-bold text-gray-800">
                <?php
                      $date = \Carbon\Carbon::parse($comunicados->created_at)->locale('es');
                      echo $date->translatedFormat( 'l j F' );
                      ?>
              </div>
            </div>
          </div>
          <div class="text-center font-bold text-2xl mb-2">{!!$comunicados->titulo!!}</div>
          <p class="text-justify px-4 text-gray-800 font-semibold">
            {!!$comunicados->contenido!!}
          </p>

        </div>
      </div>

</div>
