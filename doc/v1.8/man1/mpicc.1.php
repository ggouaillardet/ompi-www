<?php
$topdir = "../../..";
$title = "mpicc(1) man page (version 1.8.1)";
$meta_desc = "Open MPI v1.8.1 man page: mpicc(1)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
  <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
mpicc -- Open MPI C wrapper compiler
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>
mpicc [-showme|-showme:compile|-showme:link]
...
<h2><a name='sect2' href='#toc2'>Options</a></h2>

<dl>

<dt>--showme  </dt>
<dd>This option comes in several different variants (see below).
 None of the variants invokes the underlying compiler; they all provide
information on how the underlying compiler would have been invoked had
<i>--showme</i>  not been used. The basic <i>--showme</i> option outputs the command line
that would be executed to compile the program.  <b>NOTE:</b> If a non-filename argument
is passed on the command line, the <i>-showme</i> option will <i>not</i> display any additional
flags.  For example, both "mpicc --showme" and "mpicc --showme my_source.c" will
show all the wrapper-supplied flags.  But "mpicc --showme -v" will only show
the underlying compiler name and "-v". </dd>

<dt>--showme:compile </dt>
<dd>Output the compiler
flags that would have been supplied to the C compiler. </dd>

<dt>--showme:link </dt>
<dd>Output
the linker flags that would have been supplied to the C compiler. </dd>

<dt>--showme:command
</dt>
<dd>Outputs the underlying C compiler command (which may be one or more tokens).
</dd>

<dt>--showme:incdirs </dt>
<dd>Outputs a space-delimited (but otherwise undecorated) list
of directories that the wrapper compiler would have provided to the underlying
C compiler to indicate where relevant header files are located. </dd>

<dt>--showme:libdirs
</dt>
<dd>Outputs a space-delimited (but otherwise undecorated) list of directories
that the wrapper compiler would have provided to the underlying linker
to indicate where relevant libraries are located. </dd>

<dt>--showme:libs </dt>
<dd>Outputs a
space-delimited (but otherwise undecorated) list of library names that the
wrapper compiler would have used to link an application.  For example: "mpi
open-rte open-pal util". </dd>

<dt>--showme:version </dt>
<dd>Outputs the version number of Open
MPI. </dd>

<dt>--showme:help </dt>
<dd>Output a brief usage help message. </dd>
</dl>
<p>
See the man page for
your underlying C compiler for other options that can be passed through
mpicc.
<h2><a name='sect3' href='#toc3'>Description</a></h2>
<p>
Conceptually, the role of these commands is quite simple:
transparently add relevant compiler and linker flags to the user&rsquo;s command
line that are necessary to compile / link Open MPI programs, and then invoke
the underlying compiler to actually perform the command.  <p>
As such, these
commands are frequently referred to as "wrapper" compilers because they
do not actually compile or link applications themselves; they only add
in command line flags and invoke the back-end compiler.
<h3><a name='sect4' href='#toc4'>Background</a></h3>
Open
MPI is comprised of three software layers: OPAL (Open Portable Access Layer),
ORTE (Open Run-Time Environment), and OMPI (Open MPI). There are wrapper
compilers for each layer; each layer&rsquo;s wrapper only links in the libraries
relevant for that layer.  Specifically, each layer provides the following
wrapper compilers:
<dl>

<dt>OPAL </dt>
<dd><i>opalcc</i> and <i>opalc++</i>  </dd>

<dt>ORTE </dt>
<dd><i>ortecc</i> and <i>ortec++</i>  </dd>

<dt>OMPI
</dt>
<dd><i>mpicc</i>, <i>mpic++</i>, <i>mpicxx</i>, <i>mpiCC</i> (only on systems with case-senstive file systems),
and <i>mpifort</i> (and its legacy/deprecated names <i>mpif77</i> and <i>mpif90</i>).  Note that
<i>mpic++</i>, <i>mpicxx</i>, and <i>mpiCC</i> all invoke the same underlying C++ compiler with
the same options.  All are provided as compatibility with other MPI implementations.
  </dd>
</dl>

<h3><a name='sect5' href='#toc5'>Fortran Notes</a></h3>
<p>
The Fortran wrapper compiler for MPI (<i>mpifort</i>, and its legacy/deprecated
names <i>mpif77</i> and <i>mpif90</i>) can compile and link MPI applications that use
any/all of the MPI Fortran bindings: <i>mpif.h</i>, the <i>mpi</i> module, and the <i>mpi_f08</i>
module (assuming Open MPI was installed with support for each of these
Fortran bindings).  Specifically: it is no longer necessary to use different
wrapper compilers for applications that use <i>mpif.h</i> vs. applications that
use the <i>mpi</i> module -- just use <i>mpifort</i> for all Fortran MPI applications.
<p>
Note, however, that the Fortran compiler may require additional command-line
options to enforce a specific Fortran dialect.  For example, in some versions
of the IBM XLF compiler, if xlf90 is the underlying Fortran compiler, <i>-qfixed</i>
may be necessary to compile fixed-format Fortran source files.  <p>
Finally,
note that <i>mpifort</i> will be inoperative and will return an error on use if
Fortran support was not built into the MP Ilayer.
<h3><a name='sect6' href='#toc6'>Overview</a></h3>
<i>mpicc</i> is a convenience
wrappers for the underlying C compiler.  Translation of an Open MPI program
requires the linkage of the Open MPI-specific libraries which may not reside
in one of the standard search directories of <i>ld(1)</i>.  It also often requires
the inclusion of header files what may also not be found in a standard
location.  <p>
<i>mpicc</i> passes its arguments to the underlying C compiler along
with the -I, -L and -l options required by Open MPI programs.  <p>
The Open MPI
Team <i>strongly</i> encourages using the wrapper compilers instead of attempting
to link to the Open MPI libraries manually.  This allows the specific implementation
of Open MPI to change without forcing changes to linker directives in users&rsquo;
Makefiles.  Indeed, the specific set of flags and libraries used by the
wrapper compilers depends on how Open MPI was configured and built; the
values can change between different installations of the same version of
Open MPI.  <p>
Indeed, since the wrappers are simply thin shells on top of an
underlying compiler, there are very, very few compelling reasons <i>not</i> to
use <i>mpicc</i>.  When it is not possible to use the wrappers directly, the <i>-showme:compile</i>
and <i>-showme:link</i> options should be used to determine what flags the wrappers
would have used.  For example:  <p>
shell$ cc -c file1.c &lsquo;mpicc -showme:compile&lsquo;
 <p>
shell$ cc -c file2.c &lsquo;mpicc -showme:compile&lsquo;  <p>
shell$ cc file1.o file2.o &lsquo;mpicc
-showme:link&lsquo; -o my_mpi_program
<h2><a name='sect7' href='#toc7'>Notes</a></h2>
<p>
It is possible to make the wrapper
compilers multi-lib aware.  That is, the libraries and includes specified
may differ based on the compiler flags specified (for example, with the
GNU compilers on Linux, a different library path may be used if -m32 is
seen versus -m64 being seen).  This is not the default behavior in a standard
build, but can be activated (for example, in a binary package providing
both 32 and 64 bit support).  More information can be found at: <p>
  <i>https://svn.open-mpi.org/trac/ompi/wiki/compilerwrapper3264</i><br>

<h2><a name='sect8' href='#toc8'>Files</a></h2>
<p>
The string that the wrapper compilers insert into the command line
before invoking the underlying compiler are stored in a text file created
by Open MPI and installed to <i>$pkgdata/mpicc-wrapper-data.txt</i>, where <i>$pkgdata</i>
is typically <i>$prefix/share/openmpi</i>, and <i>$prefix</i> is the top installation
directory of Open MPI.  <p>
It is rarely necessary to edit this file, but it
can be examined to gain insight into what flags the wrappers are placing
on the command line.
<h2><a name='sect9' href='#toc9'>Environment Variables</a></h2>
<p>
By default, the wrappers use
the compilers that were selected when Open MPI was configured.  These compilers
were either found automatically by Open MPI&rsquo;s "configure" script, or were
selected by the user in the CC, CXX, F77, and/or FC environment variables
 before "configure" was invoked.  Additionally, other arguments specific
to the compiler may have been selected by configure.  <p>
These values can be
selectively overridden by either editing the text files containing this
configuration information (see the <b>FILES</b> section), or by setting selected
environment variables of the form "OMPI_value".  <p>
Valid value names are:

<dl>

<dt>CPPFLAGS </dt>
<dd>Flags added when invoking the preprocessor (C or C++)  </dd>

<dt>LDFLAGS
</dt>
<dd>Flags added when invoking the linker (C, C++, or Fortran)  </dd>

<dt>LIBS </dt>
<dd>Libraries
added when invoking the linker (C, C++, or Fortran)  </dd>

<dt>CC </dt>
<dd>C compiler  </dd>

<dt>CFLAGS
</dt>
<dd>C compiler flags  </dd>

<dt>CXX </dt>
<dd>C++ compiler  </dd>

<dt>CXXFLAGS </dt>
<dd>C++ compiler flags   </dd>

<dt>FC </dt>
<dd>Fortran
compiler  </dd>

<dt>FCFLAGS </dt>
<dd>Fortran compiler flags </dd>
</dl>
<p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>Options</a></li>
<li><a name='toc3' href='#sect3'>Description</a></li>
<ul>
<li><a name='toc4' href='#sect4'>Background</a></li>
<li><a name='toc5' href='#sect5'>Fortran Notes</a></li>
<li><a name='toc6' href='#sect6'>Overview</a></li>
</ul>
<li><a name='toc7' href='#sect7'>Notes</a></li>
<li><a name='toc8' href='#sect8'>Files</a></li>
<li><a name='toc9' href='#sect9'>Environment Variables</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
