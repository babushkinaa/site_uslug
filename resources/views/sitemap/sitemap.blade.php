
{{--'nasos' => $this->nasos->showAll(),--}}
{{--'uslugi' => $this->works->showAll(),--}}
{{--'myworks' => $this->myworks->showAllMyWork(),--}}
{{--'prokat' => $this->prokat->showAll()--}}

{{--{{dd($nasos,$uslugi,$myworks,$prokat)}}--}}




{{--{{ Request::header('Content-Type : text/xml') }}--}}
<?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">


        <url>
            <loc>{{ url('/') }}</loc>
            <lastmod>{{ $index->updated_at->tz('GMT')->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>1</priority>
        </url>

        <url>
            <loc>{{ url('prokat') }}</loc>
            <lastmod>{{ $index->updated_at->tz('GMT')->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>1</priority>
        </url>

        @foreach ($nasos as $post)
            <url>
                <loc>{{ url('prokat/'.$post->slug) }}</loc>
                {{--<loc>{{ url($post->slug) }}</loc>--}}
                <lastmod>{{ $post->updated_at->tz('GMT')->toAtomString() }}</lastmod>
                <changefreq>monthly</changefreq>
                <priority>1</priority>
            </url>
        @endforeach

        <url>
            <loc>{{ url('uslugi') }}</loc>
            <lastmod>{{ $index->updated_at->tz('GMT')->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>1</priority>
        </url>

        @foreach ($uslugi as $post)
            <url>
                <loc>{{ url('uslugi/'.$post->slug) }}</loc>
                <lastmod>{{ $post->updated_at->tz('GMT')->toAtomString() }}</lastmod>
                <changefreq>monthly</changefreq>
                <priority>1</priority>
            </url>
        @endforeach

        <url>
            <loc>{{ url('works') }}</loc>
            <lastmod>{{ $index->updated_at->tz('GMT')->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>1</priority>
        </url>

        @foreach ($myworks as $post)
            <url>
                <loc>{{ url('works/'.$post->slug) }}</loc>
                <lastmod>{{ $post->updated_at->tz('GMT')->toAtomString() }}</lastmod>
                <changefreq>monthly</changefreq>
                <priority>1</priority>
            </url>
        @endforeach

        <url>
            <loc>{{ url('material') }}</loc>
            <lastmod>{{ $index->updated_at->tz('GMT')->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>1</priority>
        </url>

        @foreach ($material as $post)
            <url>
                <loc>{{ url('material/'.$post->slug) }}</loc>
                <lastmod>{{ $post->updated_at->tz('GMT')->toAtomString() }}</lastmod>
                <changefreq>monthly</changefreq>
                <priority>1</priority>
            </url>
        @endforeach

    <url>
        <loc>{{ url('post') }}</loc>
        <lastmod>{{ $index->updated_at->tz('GMT')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>

    @foreach ($posts as $post)
        <url>
            <loc>{{ url('post/'.$post->slug) }}</loc>
            <lastmod>{{ $post->updated_at->tz('GMT')->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>1</priority>
        </url>
    @endforeach


        {{--@foreach ($prokat as $post)--}}
            {{--<url>--}}
                {{--<loc>{{ url($post->slug) }}</loc>--}}
                {{--<lastmod>{{ $post->updated_at->tz('GMT')->toAtomString() }}</lastmod>--}}
                {{--<changefreq>monthly</changefreq>--}}
                {{--<priority>1</priority>--}}
            {{--</url>--}}
        {{--@endforeach--}}

        <url>
        <loc>{{ url('contact') }}</loc>
        <lastmod>{{ $index->updated_at->tz('GMT')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
        </url>



</urlset>