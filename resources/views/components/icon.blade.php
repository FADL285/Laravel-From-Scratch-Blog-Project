@props(['name'])

@if($name === 'down-arrow' || $name === 'arrow-down')
    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
         fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd"
              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
              clip-rule="evenodd"/>
    </svg>
@elseif($name === 'left-arrow' || $name === 'arrow-left')
    <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
        <g fill="none" fill-rule="evenodd">
            <path
                stroke="#000"
                stroke-opacity=".012"
                stroke-width=".5"
                d="M21 1v20.16H.84V1z"
            ></path>
            <path
                class="fill-current"
                d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"
            ></path>
        </g>
    </svg>
@endif
