<x-table-subheading>
    Timezone
</x-table-subheading>

<tr>
    <x-format-cell>e</x-format-cell>
    <x-description-cell>Timezone identifier</x-description-cell>
    <td>UTC, GMT, Atlantic/Azores</td>
</tr>

<tr>
    <x-format-cell>I</x-format-cell>
    <x-description-cell>Whether or not the date is in daylight saving time</x-description-cell>
    <td>1 if Daylight Saving Time, 0 otherwise.</td>
</tr>

<tr>
    <x-format-cell>O</x-format-cell>
    <x-description-cell>Difference to Greenwich time (GMT) without colon between hours and minutes</x-description-cell>
    <td>+0200</td>
</tr>

<tr>
    <x-format-cell>P</x-format-cell>
    <x-description-cell>Difference to Greenwich time (GMT) with colon between hours and minutes</x-description-cell>
    <td>+02:00</td>
</tr>

<tr>
    <x-format-cell>p</x-format-cell>
    <x-description-cell>The same as P, but returns Z instead of +00:00</x-description-cell>
    <td>+02:00</td>
</tr>

<tr>
    <x-format-cell>T</x-format-cell>
    <x-description-cell>Timezone abbreviation, if known; otherwise the GMT offset.</x-description-cell>
    <td>EST, MDT, +05</td>
</tr>

<tr>
    <x-format-cell>Z</x-format-cell>
    <x-description-cell>Timezone offset in seconds. The offset for timezones west of UTC is always negative, <br/> and for those east of UTC is always positive.</x-description-cell>
    <td>-43200 through 50400</td>
</tr>
