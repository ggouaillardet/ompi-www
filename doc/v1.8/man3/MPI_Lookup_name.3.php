<?php
$topdir = "../../..";
$title = "MPI_Lookup_name(3) man page (version 1.8.1)";
$meta_desc = "Open MPI v1.8.1 man page: MPI_LOOKUP_NAME(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
     <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<p>
<h2><a name='sect0' href='#toc0'>Name</a></h2>
<br>
<pre>MPI_Lookup_name - Finds port associated with a service name
</pre>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<p>
<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Lookup_name(const char *service_name, MPI_Info info,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;char *port_name)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_LOOKUP_NAME(SERVICE_NAME, INFO, PORT_NAME, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;CHARACTER*(*)<tt> </tt>&nbsp;<tt> </tt>&nbsp;SERVICE_NAME, PORT_NAME
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;INFO, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
void MPI::Lookup_name(const char *service_name, const MPI::Info&amp; info,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;char* port_name)
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>service_name </dt>
<dd>A service name (string). </dd>

<dt>info </dt>
<dd>Options to the
name service functions (handle).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>port_name </dt>
<dd>a port name
(string). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
This
function retrieves a <i>port_name</i> published under <i>service_name</i> by a previous
invocation of <a href="../man3/MPI_Publish_name.3.php">MPI_Publish_name</a>. The application must supply a <i>port_name</i>
buffer large enough to hold the largest possible port name (i.e., MPI_MAX_PORT_NAME
bytes).
<p>
<h2><a name='sect8' href='#toc8'>Info Arguments</a></h2>
The following keys for <i>info</i> are recognized: <p>
<p>
<br>
<pre>Key                   Type      Description
---                   ----      -----------
ompi_lookup_order     char *    Resolution order for name lookup.
</pre>
<p> The <i>ompi_lookup_order</i> info key can specify one of four valid string values
(see the NAME SCOPE section below for more information on name scopes):

<p>
<dl>

<dt><i>local</i>: Only search the local scope for name resolution. </dt>
<dd></dd>

<dt><i>global</i>: Only search
the global scope for name resolution. </dt>
<dd></dd>

<dt><i>local,global</i>: Search the local scope
for name resolution.  If </dt>
<dd>not found, try searching the global scope for name
resolution.  This behavior is the default if the <i>ompi_lookup_order</i> info
key is not specified. </dd>

<dt><i>global,local</i>: Search the global scope for name resolution.
 If </dt>
<dd>not found, try searching the local scope for name resolution. </dd>
</dl>
<p>
If no
info key is provided, the search will first check to see if a global server
has been specified and is available. If so, then the search will default
to global scope first, followed by local. Otherwise, the search will default
to local.
<p>
<h2><a name='sect9' href='#toc9'>Name Scope</a></h2>
Open MPI supports two name scopes: <i>global</i> and <i>local</i>.
Local scope values are placed in a data store located on the mpirun of
the calling process&rsquo; job, while global scope values reside on a central
server. Calls to <a href="../man3/MPI_Unpublish_name.3.php">MPI_Unpublish_name</a> must correctly specify the scope to
be used in finding the value to be removed. The function will return an
error if the specified service name is not found on the indicated location.
<p>
For a more detailed description of scoping rules, please see the <a href="../man3/MPI_Publish_name.3.php">MPI_Publish_name</a>
man page.
<p>
<h2><a name='sect10' href='#toc10'>Errors</a></h2>
Almost all MPI routines return an error value; C routines
as the value of the function and Fortran routines in the last argument.
C++ functions do not return errors. If the default error handler is set
to MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
will be used to throw an MPI::Exception object. <p>
Before the error value is
returned, the current MPI error handler is called. By default, this error
handler aborts the MPI job, except for I/O function errors. The error handler
may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler
MPI_ERRORS_RETURN may be used to cause error values to be returned. Note
that MPI does not guarantee that an MPI program can continue past an error.
 <p>
See the MPI man page for a full list of MPI error codes.
<p>
<h2><a name='sect11' href='#toc11'>See Also</a></h2>
<br>
<pre><a href="../man3/MPI_Publish_name.3.php">MPI_Publish_name</a>
<a href="../man3/MPI_Open_port.3.php">MPI_Open_port</a>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
