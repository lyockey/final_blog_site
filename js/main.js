$(document).ready(function () {

    $('#medical-more').click(function () {
        $('#med-description').replaceWith('<ul><li>Wellness Exam | $35</li><li>Vaccinations | $95</li><li>Dentistry | $45</li></ul>').addClass('services-list');
    });

    $('#surgical-more').click(function () {
        $('#surg-description').replaceWith('<ul><li>Spay/Neuter | $120</li><li>Mass Removal and Trauma Care| $280</li><li>Orthopedic Surgery | $425</li></ul>').addClass('services-list');
    });

    $('#grooming-more').click(function () {
        $('#groom-description').replaceWith('<ul><li>Wash &amp; Trim | $45</li><li>De-shedding Package | $50</li><li>Nail Trim | $15</li></ul>').addClass('services-list');
    });
});
