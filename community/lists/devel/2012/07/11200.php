<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  2 11:20:59 2012" -->
<!-- isoreceived="20120702152059" -->
<!-- sent="Mon, 2 Jul 2012 09:20:55 -0600" -->
<!-- isosent="20120702152055" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm" -->
<!-- id="20120702152055.GB84484_at_panthera.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120702152012.EABBA15FA54_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-02 11:20:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11201.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Previous message:</strong> <a href="11199.php">Nathan Hjelm: "[OMPI devel] Trunk compilation broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11201.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Reply:</strong> <a href="11201.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Reply:</strong> <a href="11203.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Reply:</strong> <a href="11207.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nice! Are we moving this to 1.7 as well?
<br>
<p>-Nathan
<br>
<p>On Mon, Jul 02, 2012 at 11:20:12AM -0400, svn-commit-mailer_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: pasha (Pavel Shamis)
</span><br>
<span class="quotelev1">&gt; Date: 2012-07-02 11:20:12 EDT (Mon, 02 Jul 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 26707
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26707">https://svn.open-mpi.org/trac/ompi/changeset/26707</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; 1. Adding 2 new components:
</span><br>
<span class="quotelev1">&gt; ofacm - generic connection manager for IB interconnects.
</span><br>
<span class="quotelev1">&gt; ofautils - IB common utilities and compatibility code
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Updating OpenIB configure code
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - ORNL &amp; Mellanox Teams
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/config/ompi_check_openfabrics.m4
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/Makefile.am
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/base.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_base.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_empty.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_empty.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_oob.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_oob.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_xoob.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_xoob.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/configure.m4
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/configure.params
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/connect.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-base.txt
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-oob.txt
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofautils/
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofautils/Makefile.am
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofautils/common_ofautils.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofautils/common_ofautils.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofautils/configure.m4
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofautils/configure.params
</span><br>
<span class="quotelev1">&gt; Deleted:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/config/ompi_check_openib.m4
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/config/ompi_check_openfabrics.m4                |   403 +++++++++                               
</span><br>
<span class="quotelev1">&gt;    /dev/null                                                  |   329 -------                                 
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/ofud/configure.m4                       |     2                                         
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/Makefile.am                      |     4                                         
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/btl_openib_component.c           |    49 -                                       
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/configure.m4                     |     5                                         
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/Makefile.am                    |    76 +                                       
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/base.h                         |   193 ++++                                    
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_base.c            |   678 ++++++++++++++++                        
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_empty.c           |    48 +                                       
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_empty.h           |    22                                         
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_oob.c             |  1672 ++++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_oob.h             |    20                                         
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_xoob.c            |  1537 ++++++++++++++++++++++++++++++++++++    
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_xoob.h            |    69 +                                       
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/configure.m4                   |    63 +                                       
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/configure.params               |    26                                         
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/connect.h                      |   541 ++++++++++++                            
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-base.txt |    41                                         
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-oob.txt  |    20                                         
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofautils/Makefile.am                 |    68 +                                       
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofautils/common_ofautils.c           |    89 ++                                      
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofautils/common_ofautils.h           |    26                                         
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofautils/configure.m4                |    43 +                                       
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/common/ofautils/configure.params            |    26                                         
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/dpm/dpm.h                                   |     4                                         
</span><br>
<span class="quotelev1">&gt;    26 files changed, 5674 insertions(+), 380 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Diff not shown due to size (240057 bytes).
</span><br>
<span class="quotelev1">&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	svn diff -r 26706:26707 --no-diff-deleted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11201.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Previous message:</strong> <a href="11199.php">Nathan Hjelm: "[OMPI devel] Trunk compilation broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11201.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Reply:</strong> <a href="11201.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Reply:</strong> <a href="11203.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Reply:</strong> <a href="11207.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
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
