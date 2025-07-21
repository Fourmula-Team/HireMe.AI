<div class="max-w-3xl mx-auto p-6 bg-white shadow rounded mt-8">
    <h2 class="text-2xl font-semibold mb-4">CV Analysis Result</h2>

    @if(isset($result))
    <div class="prose max-w-none space-y-2">
        @foreach ($result as $key => $value)
            <p><strong>{{ ucfirst($key) }}</strong>: {{ is_array($value) ? json_encode($value) : $value }}</p>
        @endforeach
    </div>
@else
    <p>No result found.</p>
@endif


    <div class="mt-6">
        <a href="{{ url()->previous() }}" class="bg-gray-600 hover:bg-gray-700 text-white py-2 px-4 rounded">
            Back
        </a>
    </div>
</div>
