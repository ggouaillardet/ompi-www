<?
$subject_val = "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 15:57:20 2010" -->
<!-- isoreceived="20100211205720" -->
<!-- sent="Thu, 11 Feb 2010 13:57:10 -0700" -->
<!-- isosent="20100211205710" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h" -->
<!-- id="781BE6CE-5231-4714-9988-9DA3181105EA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D0D93DC4-DF7C-4BAA-B8D6-A836CA353B75_at_cisco.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 15:57:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7425.php">Eugene Loh: "[OMPI devel] documenting the PMPI profiling interface"</a>
<li><strong>Previous message:</strong> <a href="7423.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>In reply to:</strong> <a href="7423.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7426.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>Reply:</strong> <a href="7426.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wouldn't change the installation location - just thought it would be good to avoid the abstraction break in the source code.
<br>
<p>Remember - this file doesn't get installed at all unless we built the MPI layer...
<br>
<p><p>On Feb 11, 2010, at 1:11 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; My only $0.02 is that if we rename it to opal_portable_platform.h, we must remember that this file is #included in mpi.h, and therefore it is installed in user OMPI installations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $includedir/mpi_portable_platform.h was deemed to be a &quot;safe&quot; filename.  But we've already had a name conflict with &quot;opal&quot; -- so I'm not sure that $includedir/opal_portable_platform.h is a &quot;safe&quot; filename.  We might consider installing it in $includedir/openmpi/opal_portable_platform.h... or something like that (I realize that $includeddir/openmpi/&lt;foo&gt; is not necessarily a good choice for OPAL and ORTE standalone projects; so perhaps a little creativity is required here...).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 11, 2010, at 12:33 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Rename ompi/include/mpi_portable_platform.h to be opal/include/opal_portable_platform.h
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY:   The file includes definitions and macros that identify the compiler used to build the system, etc.
</span><br>
<span class="quotelev2">&gt;&gt;              The contents actually have nothing specific to do with MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHEN:    Weekend of Feb 20th
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to rationalize the ompi_info system so that people who build different layers can still get a report of the MCA params, build configuration, etc. for the layers they build. Thus, there would be an &quot;orte_info&quot; and &quot;opal_info&quot; capability. Each would report not only the info for their own layer, but the layer(s) below. So ompi_info remains unchanged, orte_info reports ORTE and OPAL info, etc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem I encountered is that the referenced file is required for the various &quot;info&quot; tools, but it exists in the MPI layer. Since the file is only accessed at build time, I can go ahead and reference it from within &quot;orte_info&quot; and &quot;opal_info&quot;, but it does somewhat break the abstraction barrier to do so.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Given that the info in the file has nothing to do with MPI itself, it seemed reasonable to move it to opal...barring arguments to the contrary.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7425.php">Eugene Loh: "[OMPI devel] documenting the PMPI profiling interface"</a>
<li><strong>Previous message:</strong> <a href="7423.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>In reply to:</strong> <a href="7423.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7426.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>Reply:</strong> <a href="7426.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
