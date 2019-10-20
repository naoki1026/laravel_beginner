<li>{{ $item['name'] }} [{{ ['mail'] }}]</li>
@section('content')
<p>ここが本文のコンテンツです。</p>
<ul>
  @each('components.item', $data, 'item')
</ul>
@endsection

