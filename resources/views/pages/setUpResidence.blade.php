@extends('master')
@section('content')
    <!-- HERO SECTION -->
    <section class="hero-section">
        <div id="slider-revolution">
            <ul>
                <li data-slotamount="7" data-masterspeed="500" data-title="Slide title 1">
                    <img src="images/bg/1.jpg" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                    <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-1" data-x="500" data-y="230" data-speed="700" data-start="1500" data-easing="easeOutBack">
                      Last minute deal
                    </div>

                    <div class="tp-caption sfb fadeout slider-caption slider-caption-1" data-x="center" data-y="280" data-speed="700" data-easing="easeOutBack"  data-start="2000">Top discount Paris Hotels</div>
                    
                    <a href="#" class="tp-caption sfb fadeout awe-btn awe-btn-style3 awe-btn-slider" data-x="center" data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">Book now</a>
                </li> 

                <li data-slotamount="7" data-masterspeed="500" data-title="Slide title 2">
                    <img src="images/bg/2.jpg" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                    <div class="tp-caption  sft fadeout slider-caption-sub slider-caption-sub-2" data-x="center" data-y="220" data-speed="700" data-start="1500" data-easing="easeOutBack">
                      Check out the top weekly destination
                    </div>

                    <div class="tp-caption sft fadeout slider-caption slider-caption-2" data-x="center" data-y="260" data-speed="700" data-easing="easeOutBack"  data-start="2000">
                        Travel with us
                    </div>
                    
                    <a href="#" class="tp-caption sft fadeout awe-btn awe-btn-style3 awe-btn-slider" data-x="center" data-y="370" data-easing="easeOutBack" data-speed="700" data-start="2200">Book now</a>
                </li>

                <li data-slotamount="7" data-masterspeed="500" data-title="Slide title 3">
                    <img src="images/bg/3.jpg" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                    <div class="tp-caption lfl fadeout slider-caption slider-caption-3" data-x="center" data-y="260" data-speed="700" data-easing="easeOutBack"  data-start="1500">
                        Gofar
                    </div>
                    
                    <div href="#" class="tp-caption lfr fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="365" data-easing="easeOutBack" data-speed="700" data-start="2000">Take you to every corner of the world</div>
                </li> 

            </ul>
        </div>
    </section>
    <!-- END / HERO SECTION -->


    <!-- SEARCH TABS -->
    <section>
        <div class="container">
            <div class="awe-search-tabs tabs">
                <ul>
                    <li>
                        <a href="#awe-search-tabs-1">
                            <i class="awe-icon awe-icon-briefcase"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#awe-search-tabs-2">
                            <i class="awe-icon awe-icon-hotel"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#awe-search-tabs-3">
                            <i class="awe-icon awe-icon-plane"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#awe-search-tabs-4">
                            <i class="awe-icon awe-icon-train"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#awe-search-tabs-5">
                            <i class="awe-icon awe-icon-car"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#awe-search-tabs-6">
                            <i class="awe-icon awe-icon-bus"></i>
                        </a>
                    </li>
                </ul>
                <div class="awe-search-tabs__content tabs__content">
                    <div id="awe-search-tabs-1" class="search-flight-hotel">
                        <h2>Search Flight + Hotel</h2>
                        <form>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>From</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Ho Chi Minh, Hanoi, Vietnam">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>To</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Ankara, Turkey">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Depart on</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Check in">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Return on</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Check out">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Adult</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <span>12 yo and above</span>
                                </div>
                                <div class="form-elements">
                                    <label>Kids</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <span>0-11 yo</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Budget</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>All types</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Hotel Rate</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>All types</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Find My Tour">
                            </div>
                        </form>
                    </div>
                    <div id="awe-search-tabs-2" class="search-hotel">
                        <h2>Where would you like to go?</h2>
                        <form>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Destinations</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Country, city, airport...">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Check in</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Date">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Check out</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Date">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Guest</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>All types</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Find My Hotel">
                            </div>

                        </form>
                    </div>
                    <div id="awe-search-tabs-3" class="search-flight">
                        <h2>Search Flight</h2>
                        <form>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>From</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Ho Chi Minh, Hanoi, Vietnam">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>To</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Ankara, Turkey">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Depart on</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Check in">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Return on</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Check out">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Adult</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <span>12 yo and above</span>
                                </div>
                                <div class="form-elements">
                                    <label>Kids</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <span>0-11 yo</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Budget</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>All types</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Find My Flight">
                            </div>
                        </form>
                    </div>

                    <div id="awe-search-tabs-4" class="search-flight">
                        <h2>Search Train</h2>
                        <form>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>From</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Ho Chi Minh, Hanoi, Vietnam">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>To</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Ankara, Turkey">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Depart on</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Check in">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Return on</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Check out">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Adult</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <span>12 yo and above</span>
                                </div>
                                <div class="form-elements">
                                    <label>Kids</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <span>0-11 yo</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Budget</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>All types</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Find My Flight">
                            </div>
                        </form>
                    </div>

                    <div id="awe-search-tabs-5" class="search-car">
                        <h2>Search Car</h2>
                        <form>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Picking up</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="City, airport...">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Droping off</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="City, airport...">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Pink off</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Date">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Drop off</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Date">
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Find My Car">
                            </div>

                        </form>
                    </div>

                    <div id="awe-search-tabs-6" class="search-bus">
                        <h2>Search Bus</h2>
                        <form>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Picking up</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="City, airport...">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Droping off</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="City, airport...">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Pink off</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Date">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Drop off</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Date">
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Find My Car">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / SEARCH TABS -->

@endsection