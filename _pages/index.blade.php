@php($title = 'Home')
@push('meta')
    <!-- Specific Meta for Homepage -->
    <meta property="og:image" content="{{ Site::url()  }}/{{ asset('book-cover/zoe-book-cover-full.png') }}">
    <meta property="og:image:alt" content="{{ env('SITE_NAME', 'Hyde Wizard') }}">
    <meta name="twitter:image" content="{{ Site::url()  }}/{{ asset('book-cover/zoe-book-cover-full.png') }}">
@endpush
@extends(config('hyde-layouts-manager.layouts.' . config('hyde-layouts-manager.default_layout') . '.app', 'hyde::layouts.app'))
@section('content')

    {!! app('layout.manager')->renderComponent('carousel', [
        'layout' => [
            'showIndicators' => false,
            'showControls' => false,
            'rounded' => false,
        ],
        'images' => [
            'media/zoe-doodle-showcase.png',
        ]]) !!}

    <section class="max-w-8xl mx-auto">

        <div class="grid grid-cols-1 md:grid-cols-2 items-center">
            <!-- Left Column: Hero -->
            <div class="p-8 flex items-center">
                {!! app('layout.manager')->renderComponent('hero', [
                    'layout' => [
                        'showPrimaryButton' => true,
                        'showSecondaryButton' => false,
                        'showSubHeadingText' => true,
                    ],
                    'settings' => [
                        'headingText' => 'Zoe and the Doodling World',
                        'subHeadingText' => 'Embark on a journey through whimsical worlds and enchanting tales brought to life by Zoe’s magical doodles. Dive into her imagination and explore the stories that inspire her art.',
                        'headingTextSize' => [
                           'default' => 'text-5xl',
                            'md' => 'text-6xl',
                            'lg' => 'text-6xl',
                        ],
                        'subHeadingTextSize' => [
                            'default' => 'text-lg',
                            'md' => 'md:text-xl',
                        ],
                        'buttonTextSize' => [
                            'default' => 'text-base',
                            'sm' => 'sm:text-lg',
                        ],
                        'headingTextAlign' => 'right',
                        'subHeadingTextAlign' => 'right',
                        'buttonsGroupAlign' => 'right',
                        'primaryButton' => [
                            'link' => 'https://github.com/melasistema/hydephp-layouts-manager',
                            'text' => 'Buy Book',
                        ],
                    ],
                ]) !!}
            </div>
            <!-- Right Column: Gallery -->
            <div class="p-8">
                {!! app('layout.manager')->renderComponent('gallery', [
                    'layout' => [
                        'gap' => '',
                        'rounded' => false,
                    ],
                    'images' => [
                        'media/book-cover/01-zoe-book-cover.png',
                        'media/book-cover/02-zoe-book-cover.png',
                        'media/book-cover/03-zoe-book-cover.png',
                        'media/book-cover/04-zoe-book-cover.png',
                        'media/book-cover/05-zoe-book-cover.png',
                        'media/book-cover/06-zoe-book-cover.png',
                        'media/book-cover/07-zoe-book-cover.png',
                        'media/book-cover/08-zoe-book-cover.png',
                        'media/book-cover/09-zoe-book-cover.png',
                        'media/book-cover/10-zoe-book-cover.png',
                        'media/book-cover/11-zoe-book-cover.png',
                        'media/book-cover/12-zoe-book-cover.png',
                    ],
                ]) !!}
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 items-center">
            <!-- Left Column: Carousel -->
            <div class="p-8 flex items-center">
                {!! app('layout.manager')->renderComponent('carousel', [
                        'layout' => [
                            'showIndicators' => false,
                            'showControls' => false,
                            'rounded' => true,
                        ],
                         'images' => [
                             'media/doodle-carousel/01-doodle.png',
                             'media/doodle-carousel/02-doodle.png',

                         ],
                     ]) !!}
            </div>
            <!-- Right Column: Gallery -->
            <div class="p-8">
                {!! app('layout.manager')->renderComponent('accordion', [
                   'items' => [
                        [
                            'title' => '📖 What is your book about?',
                            'description' => '
                                Once upon a time, there was a book filled with doodles that came alive! 🌟<br><br>
                                My book is a treasure trove of whimsical illustrations and enchanting stories that inspire your inner artist to pick up a pen and let your imagination flow. Perfect for beginners and seasoned doodlers alike!
                            '
                        ],
                        [
                            'title' => '🎨 What will I learn in your doodle course?',
                            'description' => '
                                Embark on a magical journey of creativity! ✍️ In my doodle course, you\'ll discover:
                                <ul>
                                    <li>How to draw simple yet stunning doodles. ✨</li>
                                    <li>Tips to bring your ideas to life on paper. 🌈</li>
                                    <li>Secrets to finding joy and mindfulness through art. 🍃</li>
                                </ul>
                                All you need is an open heart and a little bit of courage to start your creative adventure! 🧚‍♀️
                            '
                        ],
                        [
                            'title' => '🧙‍♀️ Do I need any prior experience to join?',
                            'description' => '
                                Not at all! This course is designed for everyone, from curious beginners to seasoned artists seeking a touch of magic. Just bring yourself, a notebook, and your favorite pen – the rest will unfold like a fairy tale! ✨
                            '
                        ],
                        [
                            'title' => '🌟 Can kids join the doodle course?',
                            'description' => '
                                Absolutely! The doodle course is perfect for kids and adults alike. It\'s a playful and engaging way to explore creativity together as a family. 👩‍👧‍👦🌈<br><br>
                                Many young artists have discovered their love for drawing through my classes – and I can’t wait to inspire more!
                            '
                        ],
                        [
                            'title' => '📦 Where can I buy your book?',
                            'description' => '
                                My magical doodle book is available online and in select bookstores! You can find it here:<br><br>
                                <strong><a href="https://github.com/melasistema/hydephp-layouts-manager" target="_blank" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Order the book now →</a></strong><br><br>
                                Every purchase supports my mission to spread creativity and joy across the world. Thank you for being part of this magical journey! 🌸✨
                            '
                        ],
                    ],
                 ]) !!}
            </div>
        </div>

    </section>

    <img class="p-12" src="media/mixed/hand-drawn-line.png" alt="The Tale of Zoe">

@endsection
