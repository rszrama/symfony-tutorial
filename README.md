symfony-tutorial part-6
=======================

At this point in the tutorial, the framework uses the following process and
Symfony components to respond to HTTP requests:

1. /web/front.php initializes the framework and creates a Request object
representing the current HTTP request.
2. It includes /src/app.php to define the routes for the application. In its
current iteration, the sole Route added to our RouteCollection is the leap_year
route, which takes an optional year path argument that defaults to the current
year if not present. The controller for this route is a callable specific to
Symfony, in that our HttpKernel ControllerResolver will interpret it properly
even though the method name specified is not static.
3. It then prepares a RequestContext object for use by a UrlMatcher object that
can match the path of the current request to one of our routes. It also prepares
a ControllerResolver object that can convert the 'ClassName::methodName'
callable format to the array($obj, 'methodName'), allowing routes to identify
non-static methods as controllers.
4. The try block first populates the request attributes ParameterBag with the
parameters of the matching route: year, _controller, and _route.
5. It then uses the previously created resolver to determine the controller
callable. The sole route in this application uses a method on the
LeapYearController class as the route controller, so the resolver instantiates a
LeapYearController object and returns an array callable including that object
and the controller method name, indexAction.
6. Finally, the try block invokes the callable array along with its arguments to
generate the Response object.
7. If the matcher throws a ResourceNotFoundException, the first catch block will
generate the framework's 404 response.
8. If any other exception is thrown, the second catch block will generate the
framework's 500 response.
9. Finally, /web/front.php prepares and sends the HTTP response to the client.
