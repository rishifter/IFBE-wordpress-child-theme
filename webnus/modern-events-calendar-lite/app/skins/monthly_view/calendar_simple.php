<?php

/** no direct access **/
defined('MECEXEC') or die();

/** @var MEC_skin_monthly_view $this */

// table headings
$headings = $this->main->get_weekday_abbr_labels();
echo '<dl class="mec-calendar-table-head"><dt class="mec-calendar-day-head">' . implode('</dt><dt class="mec-calendar-day-head">', $headings) . '</dt></dl>';

// Start day of week
$week_start = $this->main->get_first_day_of_week();

// Single Event Display Method
$target_set = isset($this->skin_options['sed_method']) ? $this->skin_options['sed_method'] : false;
$target_url = ($target_set == 'new') ? 'target="_blank"' : '';

$this->localtime = isset($this->skin_options['include_local_time']) ? $this->skin_options['include_local_time'] : false;
$display_label = isset($this->skin_options['display_label']) ? $this->skin_options['display_label'] : false;
// $reason_for_cancellation = isset($this->skin_options['reason_for_cancellation']) ? $this->skin_options['reason_for_cancellation'] : false;

// days and weeks vars
$running_day = date('w', mktime(0, 0, 0, $month, 1, $year));
$days_in_month = date('t', mktime(0, 0, 0, $month, 1, $year));
$days_in_previous_month = date('t', strtotime('-1 month', strtotime($this->active_day)));

$days_in_this_week = 1;
$day_counter = 0;

if ($week_start == 0) $running_day = $running_day; // Sunday
elseif ($week_start == 1) // Monday
{
    if ($running_day != 0) $running_day = $running_day - 1;
    else $running_day = 6;
} elseif ($week_start == 6) // Saturday
{
    if ($running_day != 6) $running_day = $running_day + 1;
    else $running_day = 0;
} elseif ($week_start == 5) // Friday
{
    if ($running_day < 4) $running_day = $running_day + 2;
    elseif ($running_day == 5) $running_day = 0;
    elseif ($running_day == 6) $running_day = 1;
}
?>
<dl class="mec-calendar-row">
    <?php
    // print "blank" days until the first of the current week
    for ($x = 0; $x < $running_day; $x++) {
        echo '<dt class="mec-calendar-day empty mec-table-nullday"></dt>';
        $days_in_this_week++;
    }

    // keep going with days ....
    for ($list_day = 1; $list_day <= $days_in_month; $list_day++) {
        $time = strtotime($year . '-' . $month . '-' . $list_day);

        $today = date('Y-m-d', $time);
        $day_id = date('Ymd', $time);
        $selected_day = (str_replace('-', '', $this->active_day) == $day_id) ? ' today' : '';
        $selected_day_date = (str_replace('-', '', $this->active_day) == $day_id) ? 'mec-color today' : '';

        // Print events
        if (isset($events[$today]) and count($events[$today])) {
            echo '<dt class="mec-calendar-day has-event" data-mec-cell="' . esc_attr($day_id) . '" data-day="' . esc_attr($list_day) . '" data-month="' . date('Ym', $time) . '">';

            echo '<div class="event-date ' . esc_attr($selected_day_date) . '">' . esc_attr($list_day) . '</div>';

            foreach ($events[$today] as $event) {
                $start_time = (isset($event->data->time) ? $event->data->time['start'] : '');
                $end_time = (isset($event->data->time) ? $event->data->time['end'] : '');

                $event_unique = (isset($event->data->time) ? $event->data->ID . $event->data->time['start_timestamp'] : $event->data->ID);

                // Event Content
                if (!$this->cache->has($event->data->ID . '_content')) {
                    $event_content = ((isset($event->data->content) and trim($event->data->content) != '') ? mb_substr(strip_tags($event->data->content, '<style>'), 0, 320) : '');
                    $this->cache->set($event->data->ID . '_content', $event_content);
                } else $event_content = $this->cache->get($event->data->ID . '_content');

                echo !empty($event->data->featured_image['thumbnail']) ? '<a class="event-image" href="' . esc_url($this->main->get_event_date_permalink($event, $event->date['start']['date'])) . '">' . MEC_kses::element($event->data->thumbnails['thumbnail']) . '</a>' : '';

                echo '<div class="event-details' . $selected_day . '" data-mec-cell="' . esc_attr($day_id) . '">';

                // Category
                foreach ($event->data->categories as $category) {
                    echo '<a class="event-category" href="' . get_term_link($category['id'], 'mec_category') . '" rel="tag">' . MEC_kses::element(esc_html($category['name'])) . '</a>';
                }

                // Title
                echo '<a class="event-title" data-event-id="' . esc_attr($event->data->ID) . '" href="' . esc_url($this->main->get_event_date_permalink($event, $event->date['start']['date'])) . '" ' . $target_url . '>' . esc_html($event->data->title) . '</a>';

                // Description
                // echo !empty($event->data->content) ? '<div class="mec-tooltip-event-desc event-desc">' . MEC_kses::full($event_content) . ' , ...</div>' : '';
                $desc = !empty($event->data->post->post_excerpt) ? MEC_kses::full($event->data->post->post_excerpt) : MEC_kses::full($event_content);
                echo '<div class="event-desc">' . $desc . '</div>';

                // Time
                if ($this->display_detailed_time and $this->main->is_multipleday_occurrence($event)) {
                    $from = date("F j, ga", $event->date['start']['timestamp']);
                    $to = date("F j, ga", $event->date['end']['timestamp']);
                    $from_to = $from . " - " . $to;
                    echo '<div class="mec-event-detailed-time mec-tooltip-event-time mec-color event-time"><i class="mec-sl-clock-o"></i> ' . $from_to . '</div>';
                } elseif (trim($start_time)) {
                    // print_r($event->data->meta['mec_allday']);
                    // print_r($start_time);
                    if ($event->data->meta['mec_allday']) {
                        $from = date("F j, Y", $event->date['start']['timestamp']);
                        echo '<div class="mec-tooltip-event-time event-time"><i class="mec-sl-clock-o"></i> ' . esc_html($from) . '</div>';
                    } else {
                        $from = date("F j,", $event->date['start']['timestamp']);
                        echo '<div class="mec-tooltip-event-time event-time"><i class="mec-sl-clock-o"></i> ' . esc_html($from . " " . $start_time . (trim($end_time) ? ' - ' . $end_time : '')) . '</div>';
                    }
                }

                echo '</div>';

                // MEC Schema
                do_action('mec_schema', $event);
            }

            echo '</dt>';
        } else {
            echo '<dt class="mec-calendar-day empty' . esc_attr($selected_day) . '" data-mec-cell="' . esc_attr($day_id) . '" data-day="' . esc_attr($list_day) . '" data-month="' . date('Ym', $time) . '"><div class="event-date ' . esc_attr($selected_day_date) . '">' . esc_attr($list_day) . '</div></dt>';
            echo '</dt>';
        }

        if ($running_day == 6) {
            // echo '</dl>';

            if ((($day_counter + 1) != $days_in_month) or (($day_counter + 1) == $days_in_month and $days_in_this_week == 7)) {
                // echo '<dl class="mec-calendar-row">';
            }

            $running_day = -1;
            $days_in_this_week = 0;
        }

        $days_in_this_week++;
        $running_day++;
        $day_counter++;
    }

    // finish the rest of the days in the week
    if ($days_in_this_week < 8 && $month != 07) {
        for ($x = 1; $x <= (8 - $days_in_this_week); $x++) {
            echo '<dt class="mec-calendar-day empty mec-table-nullday"></dt>';
        }
    }

    echo '</dl>';
    ?>
</dl>