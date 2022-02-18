<div>
    <x-title :displayName="$displayName" :documentationUrl="$documentationUrl" />

    <table>
        <thead>
            <tr>
                <th class="text-gray-400">Format</th>

                @if (! $compact)
                    <th class="text-gray-400">Description</th>
                @endif

                <th class="text-gray-400">Example</th>
            </tr>
        </thead>

        <tbody>
            @include($view)
        </tbody>
    </table>
</div>
