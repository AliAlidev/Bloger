@extends('Layouts.app')

@section('content')
@include('Layouts.slider')
    <!-- after banner -->
    <div class="after-banner">
        <div class="container">
            <div class="default-heading">
                <!-- heading -->
                <h2>Our Goals</h2>
            </div>
            <div class="row">
                @foreach ($goals_data as $item)
                    <div class="col-md-4 col-sm-4">
                        <!-- after banner item -->
                        <div class="ab-item">
                            <!-- heading -->
                            <h3>{{ $item->title }}</h3>
                            <!-- paragraph -->
                            <p>{{ $item->description }}</p>
                            <br>
                            <a href="/showitem/{{ $item->id }}">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div style="float: left; padding-left: 190px; padding-top: 20px;">
            {{ $goals_data->links() }}
        </div>
    </div>
    <!-- after banner end-->
    <br>
    <!-- events -->
    <div class="event" id="event">
        <div class="container">
            <div class="default-heading">
                <!-- heading -->
                <h2>Upcoming events</h2>
            </div>
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-md-4 col-sm-4">
                        <!-- event item -->
                        <div class="event-item">
                            <!-- image -->
                            <img class="img-responsive" src={{ asset($event->img) }} alt="Events" />
                            <!-- heading -->
                            <h4><a href="#">{{ $event->title }}</a></h4>
                            <!-- sub text -->
                            <span class="sub-text">{{ $event->subtitle }}</span>
                            <!-- paragraph -->
                            <p>{{ $event->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div style="float: left; padding-left: 0px; padding-top: 20px;">
                {{ $events->links() }}
            </div>
        </div>
    </div>
    <!-- events end -->

    {{-- <!-- blog -->
    <div class="blog" id="blog">
        <div class="container">
            <div class="default-heading">
                <!-- heading -->
                <h2>Latest Blogs</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <!-- blog entry -->
                    <div class="entry">
                        <!-- blog entry image -->
                        <img class="img-responsive" src="img/blog/1.jpg" alt="Blog" />
                        <!-- heading / blog post title -->
                        <h3><a href="#">Communicating with you every step of the way</a></h3>
                        <!-- blog information -->
                        <span class="meta">
                            July 02, 2014 | Tag: Technology | By: David John
                        </span>
                        <!-- paragraph -->
                        <p>We combine continuing education and constant monitoring us with your project details if
                            you are interested to ge of industry trends and innovations to provide the right IT
                            solution at the right time. Contact us with your project details if you are interested
                            to get our Web Solution or Software Development Services.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- blog entry -->
                    <div class="entry">
                        <!-- blog entry image -->
                        <img class="img-responsive" src="img/blog/2.jpg" alt="Blog" />
                        <!-- heading / blog post title -->
                        <h3><a href="#">Communicating with you every step of the way</a></h3>
                        <!-- blog information -->
                        <span class="meta">
                            July 02, 2014 | Tag: Technology | By: David John
                        </span>
                        <!-- paragraph -->
                        <p>We combine continuing education and constant monitoring us with your project details if
                            you are interested to ge of industry trends and innovations to provide the right IT
                            solution at the right time. Contact us with your project details if you are interested
                            to get our Web Solution or Software Development Services.</p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="#" class="btn btn-default">See More</a>
            </div>
        </div>
    </div>
    <!-- blog end --> --}}

    <!-- our customer -->
    <div class="team" id="customer">
        <div class="container">
            <div class="default-heading">
                <!-- heading -->
                <h2>Our Customers</h2>
            </div>
            <div class="row">
                @foreach ($customers as $customer)
                    <div class="col-md-3 col-sm-3">
                        <!-- team member -->
                        <div class="member">
                            <!-- images -->
                            <img class="img-responsive" src={{ asset($customer->img) }} alt="our customers" />
                            <!-- heading -->
                            <h3>{{ $customer->name }}</h3>
                            <!-- designation -->
                            <span class="dig">{{ $customer->description }}</span>
                            <!-- email -->
                            <a href="#">{{ $customer->emial }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div style="float: left; padding-left: 0px; padding-top: 20px;">
                {{-- {{ $customers->links() }} count {{ $customers->count() }} --}}
                <a class="btn btn-primary" href={{ $customers->previousPageUrl() }}> prev </a>
                <input type="text" style="width: 30px" value={{ $customers->currentPage() }}>
                <a class="btn btn-primary" href={{ $customers->nextPageUrl() }}> next </a>
            </div>
        </div>
    </div>
    <!-- end our customer -->

    <!-- subscribe -->
    <div class="subscribe" id="subscribe">
        <div class="container">
            <!-- subscribe content -->
            <div class="sub-content">
                <h3>Subscribe Here for Updates</h3>
                <form role="form">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Email...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Subscribe</button>
                        </span>
                    </div><!-- /input-group -->
                </form>
            </div>
        </div>
    </div>
    <!-- subscribe end -->

    <!-- team -->
    <div class="team" id="team">
        <div class="container">
            <div class="default-heading">
                <!-- heading -->
                <h2>Development Team</h2>
            </div>
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-md-3 col-sm-3">
                        <!-- team member -->
                        <div class="member">
                            <!-- images -->
                            <img class="img-responsive" src={{ $team->img }} alt="Team Member" />
                            <!-- heading -->
                            <h3>{{ $team->name }}</h3>
                            <!-- designation -->
                            <span class="dig">{{ $team->role }}</span>
                            <!-- email -->
                            <a href="#">{{ $team->email }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- team end -->

@endsection
