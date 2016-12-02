$(document).ready(function () {

    $('#medical-more').click(function () {
        $('#med-description').replaceWith('<ul><li>Wellness Exam | <span class="price">$35</span></li><li>Vaccinations | <span class="price">$95</span></li><li>Dentistry | <span class="price">$45</span></li></ul>');
    });

    $('#medical-more').click(function () {
        $('#medical-more').replaceWith('<a href="#schedule" class="schedule-button">Make an Appointment</a>');
    });

    $('#surgical-more').click(function () {
        $('#surg-description').replaceWith('<ul><li>Spay/Neuter | <span class="price">$120</span></li><li>Trauma Care | <span class="price">$280</span></li><li>Orthopedic Surgery | <span class="price">$425</span></li></ul>');
    });

    $('#surgical-more').click(function () {
        $('#surgical-more').replaceWith('<a href="#schedule" class="schedule-button">Make an Appointment</a>');
    });

    $('#grooming-more').click(function () {
        $('#groom-description').replaceWith('<ul><li>Wash &amp; Trim | <span class="price">$45</span></li><li>De-shedding Package | <span class="price">$50</span></li><li>Nail Trim | <span class="price">$15</span></li></ul>');
    });

    $('#grooming-more').click(function () {
        $('#grooming-more').replaceWith('<a href="#schedule" class="schedule-button">Make an Appointment</a>');
    });
});
