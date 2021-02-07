# ads_redirect
Redirects to avoid common ADS/Tracking sites

*This has been tested on PIHOLE system, but it can also work on stand alone configurations*

This config need to setup a local, trusted ( by the clients ) CA to "mimic" the various remote services

Then add into your DNS configuration the given url names and make them point to your PiHole/Webserver.
Using the Redirect configuration the calls to the remote services will be intercepted and redirected to the desired URL, avoiding the tracking by the 3rd party.

For example, this will allow to click on links behind ad-tracked tracking and make the client reach directly the desired URL skipping the redirect through the tracker. This will improve navigation speed and privacy of the user.

This repo is just a concept, usable at home but nothing more atm.
