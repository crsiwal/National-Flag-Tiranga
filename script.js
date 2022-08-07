$(document).ready(function () {
  $('body').on('input', '#name', function (e) {
    if ($("#error").hasClass("d-block")) {
      $("#error").removeClass("d-block");
    }
    let name = $(this).val();
    let encode_url = baseurl + '' + encodeURIComponent(name.trim());

    // Object URL set to WhatsApp Share.
    $("#wpshare").data("text", encode_url);

    // Object URL for Facebook Share
    let fblink = `https://www.facebook.com/sharer/sharer.php?u=${encode_url}`;
    $("#fbshare").attr("href", fblink);
  });

  $("body").on("click", "#wpshare", function (e) {
    let name = $("#name").val();
    if (name == "") {
      $("#error").addClass("d-block");
    } else {
      let share_url = $(this).data("text");
      let wptext = "";
      switch (lang) {
        case "HINDI":
          wptext = `मैं *${name}* आपको *राष्ट्रीय ध्वज तिरंगा* भेज रहा हूं। आप भी इसे अपने तक ना रखें अपने सभी दोस्तों को भेजें। %0aआइए स्वतंत्रता के 75वें वर्ष पर इस अमृत महोत्सव में हर व्यक्ति को तिरंगा भेजें %0a%0aजय हिंद, जय भारत %0a`;
          break;
        default:
          wptext = `I am *${name}* sending you the National Flag Tiranga, You also don't keep it to yourself. Send it to all your friends. %0aLet's send the Tiranga to every person in this Amrit Mahotsav on the 75th year of Independence. %0a%0aJai Hind, Jai Bharat%0a`;
          break;
      }
      wptext = wptext + encodeURIComponent(share_url.trim());
      window.location = "whatsapp://send?text=" + wptext + "%0a";
    }
  });

  $("body").on("click", "#fbshare", function (e) {
    if ($("#name").val() == "") {
      e.preventDefault();
      $("#error").addClass("d-block");
    }
  });
});