<?php
/*

 Template Name: Events

*/
?>
<?php get_header(); ?>


			<div id="content" class="wrap">

				<div id="inner-content" class="cf">

						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

<div id="dsa-cal-app" v-cloak>
        <div class="intro-section-header">Upcoming Events</div>
            <ul id="events-calendar">
                <li v-for="event in calEvents" itemscope itemtype="http://schema.org/Event"> 
                    <meta itemprop="startDate" content="{{ event.theStart }}">
                    <div class="thedate">
                        <span class="day">{{ event.prettyStartTime.day }}</span> 
                        <span class="month">{{ event.prettyStartTime.month }}</span>
                        <span class="date"> {{ event.prettyStartTime.date }}</span>
                        <span class="time" v-if="event.hasStartTime"> 
                            <span> {{ event.prettyStartTime.time }} {{ event.prettyStartTime.ampm }} </span>
                            <span v-if="event.hasEndTime"> - {{ event.prettyEndTime.time }} {{ event.prettyEndTime.ampm }} </span>
                        </span>
                    </div>
                                            
                    <div itemprop="name" class="name">{{ event.summary }}</div>
                    <div class="location">{{ event.location }}</div>
                    <div class="description" itemprop="description">{{ event.description }}</div>

                    <script type='application/ld+json'> 
                        {
                          "@context": "http://www.schema.org",
                          "@type": "Event",
                          "name": "{{ event.summary }}",
                          "description": "{{ event.description }}",
                          "startDate": "{{ event.startTime }}",
                          "endDate": "{{ event.endTime }}",
                          "location": {
                            "@type": "Place",
                            "name": "{{ event.location }}",
                            "address": "{{ event.location }}"
                          }
                        }
                    </script>


                </li>
            </ul>
            <div id="errors" v-if="showErrors">
                Derp. Something went wrong- if you're seeing this, please let us know on <a href='https://www.facebook.com/NewOrleansDSA/'>Facebook</a> or the <a href='https://twitter.com/neworleansdsa'>Twitters</a>!
            </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.7.0/moment.min.js"></script>
    
    <!-- Calendar-specific stuff -->
    <link rel="stylesheet" type="text/css" media="screen" href="/css/events.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.2/vue.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/library/js/events.js"></script>
    


						</div>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
