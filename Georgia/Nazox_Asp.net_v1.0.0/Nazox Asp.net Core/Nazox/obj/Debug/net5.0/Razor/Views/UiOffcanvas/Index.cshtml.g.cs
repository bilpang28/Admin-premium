#pragma checksum "F:\trial\template\nazox\nazox Asp.net Core\Nazox\Nazox\Views\UiOffcanvas\Index.cshtml" "{ff1816ec-aa5e-4d10-87f7-6f4963833460}" "7e21702100601572e038d9f01f15753277e0e4c7"
// <auto-generated/>
#pragma warning disable 1591
[assembly: global::Microsoft.AspNetCore.Razor.Hosting.RazorCompiledItemAttribute(typeof(AspNetCore.Views_UiOffcanvas_Index), @"mvc.1.0.view", @"/Views/UiOffcanvas/Index.cshtml")]
namespace AspNetCore
{
    #line hidden
    using System;
    using System.Collections.Generic;
    using System.Linq;
    using System.Threading.Tasks;
    using Microsoft.AspNetCore.Mvc;
    using Microsoft.AspNetCore.Mvc.Rendering;
    using Microsoft.AspNetCore.Mvc.ViewFeatures;
    [global::Microsoft.AspNetCore.Razor.Hosting.RazorSourceChecksumAttribute(@"SHA1", @"7e21702100601572e038d9f01f15753277e0e4c7", @"/Views/UiOffcanvas/Index.cshtml")]
    public class Views_UiOffcanvas_Index : global::Microsoft.AspNetCore.Mvc.Razor.RazorPage<dynamic>
    {
        private static readonly global::Microsoft.AspNetCore.Razor.TagHelpers.TagHelperAttribute __tagHelperAttribute_0 = new global::Microsoft.AspNetCore.Razor.TagHelpers.TagHelperAttribute("src", new global::Microsoft.AspNetCore.Html.HtmlString("~/assets/libs/jquery/jquery.min.js"), global::Microsoft.AspNetCore.Razor.TagHelpers.HtmlAttributeValueStyle.DoubleQuotes);
        private static readonly global::Microsoft.AspNetCore.Razor.TagHelpers.TagHelperAttribute __tagHelperAttribute_1 = new global::Microsoft.AspNetCore.Razor.TagHelpers.TagHelperAttribute("src", new global::Microsoft.AspNetCore.Html.HtmlString("~/assets/libs/bootstrap/js/bootstrap.bundle.min.js"), global::Microsoft.AspNetCore.Razor.TagHelpers.HtmlAttributeValueStyle.DoubleQuotes);
        private static readonly global::Microsoft.AspNetCore.Razor.TagHelpers.TagHelperAttribute __tagHelperAttribute_2 = new global::Microsoft.AspNetCore.Razor.TagHelpers.TagHelperAttribute("src", new global::Microsoft.AspNetCore.Html.HtmlString("~/assets/libs/metismenu/metisMenu.min.js"), global::Microsoft.AspNetCore.Razor.TagHelpers.HtmlAttributeValueStyle.DoubleQuotes);
        private static readonly global::Microsoft.AspNetCore.Razor.TagHelpers.TagHelperAttribute __tagHelperAttribute_3 = new global::Microsoft.AspNetCore.Razor.TagHelpers.TagHelperAttribute("src", new global::Microsoft.AspNetCore.Html.HtmlString("~/assets/libs/simplebar/simplebar.min.js"), global::Microsoft.AspNetCore.Razor.TagHelpers.HtmlAttributeValueStyle.DoubleQuotes);
        private static readonly global::Microsoft.AspNetCore.Razor.TagHelpers.TagHelperAttribute __tagHelperAttribute_4 = new global::Microsoft.AspNetCore.Razor.TagHelpers.TagHelperAttribute("src", new global::Microsoft.AspNetCore.Html.HtmlString("~/assets/libs/node-waves/waves.min.js"), global::Microsoft.AspNetCore.Razor.TagHelpers.HtmlAttributeValueStyle.DoubleQuotes);
        private static readonly global::Microsoft.AspNetCore.Razor.TagHelpers.TagHelperAttribute __tagHelperAttribute_5 = new global::Microsoft.AspNetCore.Razor.TagHelpers.TagHelperAttribute("src", new global::Microsoft.AspNetCore.Html.HtmlString("~/assets/js/app.js"), global::Microsoft.AspNetCore.Razor.TagHelpers.HtmlAttributeValueStyle.DoubleQuotes);
        #line hidden
        #pragma warning disable 0649
        private global::Microsoft.AspNetCore.Razor.Runtime.TagHelpers.TagHelperExecutionContext __tagHelperExecutionContext;
        #pragma warning restore 0649
        private global::Microsoft.AspNetCore.Razor.Runtime.TagHelpers.TagHelperRunner __tagHelperRunner = new global::Microsoft.AspNetCore.Razor.Runtime.TagHelpers.TagHelperRunner();
        #pragma warning disable 0169
        private string __tagHelperStringValueBuffer;
        #pragma warning restore 0169
        private global::Microsoft.AspNetCore.Razor.Runtime.TagHelpers.TagHelperScopeManager __backed__tagHelperScopeManager = null;
        private global::Microsoft.AspNetCore.Razor.Runtime.TagHelpers.TagHelperScopeManager __tagHelperScopeManager
        {
            get
            {
                if (__backed__tagHelperScopeManager == null)
                {
                    __backed__tagHelperScopeManager = new global::Microsoft.AspNetCore.Razor.Runtime.TagHelpers.TagHelperScopeManager(StartTagHelperWritingScope, EndTagHelperWritingScope);
                }
                return __backed__tagHelperScopeManager;
            }
        }
        private global::Microsoft.AspNetCore.Mvc.Razor.TagHelpers.UrlResolutionTagHelper __Microsoft_AspNetCore_Mvc_Razor_TagHelpers_UrlResolutionTagHelper;
        #pragma warning disable 1998
        public async override global::System.Threading.Tasks.Task ExecuteAsync()
        {
#nullable restore
#line 1 "F:\trial\template\nazox\nazox Asp.net Core\Nazox\Nazox\Views\UiOffcanvas\Index.cshtml"
  
    ViewBag.Title = "OffCanvas";
    ViewBag.pTitle = "OffCanvas";
    ViewBag.pageTitle = "UI Elements";
    Layout = "~/Views/_Shared/_Layout.cshtml";

#line default
#line hidden
#nullable disable
            WriteLiteral(@"
<div class=""row"">
    <div class=""col-lg-6"">
        <div class=""card"">
            <div class=""card-body"">
                <h5 class=""card-title"">Demo</h5>
                <p class=""card-title-desc"">Use the buttons below to show and hide an offcanvas element via JavaScript that toggles the <code>.show</code> class on an element with the <code>.offcanvas</code> class.</p>

                <div class=""d-flex flex-wrap gap-2"">
                    <a class=""btn btn-primary"" data-bs-toggle=""offcanvas"" href=""#offcanvasExample"" role=""button"" aria-controls=""offcanvasExample"">
                        Link with href
                    </a>
                    <button class=""btn btn-primary"" type=""button"" data-bs-toggle=""offcanvas"" data-bs-target=""#offcanvasExample"" aria-controls=""offcanvasExample"">
                        Button with data-bs-target
                    </button>
                </div>

                <div class=""offcanvas offcanvas-start"" tabindex=""-1"" id=""offcanvasExample"" aria-lab");
            WriteLiteral(@"elledby=""offcanvasExampleLabel"">
                    <div class=""offcanvas-header"">
                        <h5 class=""offcanvas-title"" id=""offcanvasExampleLabel"">Offcanvas</h5>
                        <button type=""button"" class=""btn-close text-reset"" data-bs-dismiss=""offcanvas"" aria-label=""Close""></button>
                    </div>
                    <div class=""offcanvas-body"">
                        <div>
                            Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                        </div>
                        <div class=""dropdown mt-3"">
                            <button class=""btn btn-primary dropdown-toggle"" type=""button"" id=""dropdownMenuButton"" data-bs-toggle=""dropdown"">
                                Dropdown button <i class=""mdi mdi-chevron-down""></i>
                            </button>
                            <ul class=""dropdown-menu"" aria-labelledby=""dropdownMenuButton"">
             ");
            WriteLiteral(@"                   <li><a class=""dropdown-item"" href=""#"">Action</a></li>
                                <li><a class=""dropdown-item"" href=""#"">Another action</a></li>
                                <li><a class=""dropdown-item"" href=""#"">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card body  -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class=""col-lg-6"">
        <div class=""card"">
            <div class=""card-body"">
                <h5 class=""card-title"">Placement</h5>
                <p class=""card-title-desc"">Offcanvas Diffrent Placement Example: Left, Right & Bottom</p>

                <div class=""d-flex flex-wrap gap-2"">
                    <button class=""btn btn-primary"" type=""button"" data-bs-toggle=""offcanvas"" data-bs-target=""#offcanvasRight"" aria-controls=""offcanvasRight"">Toggle right offcanvas</button>");
            WriteLiteral(@"

                    <button class=""btn btn-primary"" type=""button"" data-bs-toggle=""offcanvas"" data-bs-target=""#offcanvasBottom"" aria-controls=""offcanvasBottom"">Toggle bottom offcanvas</button>
                </div>

                <!-- right offcanvas -->
                <div class=""offcanvas offcanvas-end"" tabindex=""-1"" id=""offcanvasRight"" aria-labelledby=""offcanvasRightLabel"">
                    <div class=""offcanvas-header"">
                        <h5 id=""offcanvasRightLabel"">Offcanvas Right</h5>
                        <button type=""button"" class=""btn-close text-reset"" data-bs-dismiss=""offcanvas"" aria-label=""Close""></button>
                    </div>
                    <div class=""offcanvas-body"">
                        ...
                    </div>
                </div>

                <!-- left offcanvas -->
                <div class=""offcanvas offcanvas-bottom"" tabindex=""-1"" id=""offcanvasBottom"" aria-labelledby=""offcanvasBottomLabel"">
                    <div class=""offcanv");
            WriteLiteral(@"as-header"">
                        <h5 id=""offcanvasBottomLabel"">Offcanvas Bottom</h5>
                        <button type=""button"" class=""btn-close text-reset"" data-bs-dismiss=""offcanvas"" aria-label=""Close""></button>
                    </div>
                    <div class=""offcanvas-body"">
                        ...
                    </div>
                </div>
            </div>
            <!-- end card body  -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class=""row"">
    <div class=""col-lg-12"">
        <div class=""card"">
            <div class=""card-body"">
                <h5 class=""card-title"">Backdrop</h5>
                <p class=""card-title-desc"">Scrolling the <code>&lt;body&gt;</code> element is disabled when an offcanvas and its backdrop are visible. Use the <code>data-bs-scroll</code> attribute to toggle <code>&lt;body&gt;</code> scrolling and <code>data-bs-backdrop</code> to toggle the backdrop.</p>

     ");
            WriteLiteral(@"           <div class=""d-flex flex-wrap gap-2"">
                    <button class=""btn btn-primary"" type=""button"" data-bs-toggle=""offcanvas"" data-bs-target=""#offcanvasScrolling"" aria-controls=""offcanvasScrolling"">Enable body scrolling</button>
                    <button class=""btn btn-primary"" type=""button"" data-bs-toggle=""offcanvas"" data-bs-target=""#offcanvasWithBackdrop"" aria-controls=""offcanvasWithBackdrop"">Enable backdrop (default)</button>
                    <button class=""btn btn-primary"" type=""button"" data-bs-toggle=""offcanvas"" data-bs-target=""#offcanvasWithBothOptions"" aria-controls=""offcanvasWithBothOptions"">Enable both scrolling & backdrop</button>
                </div>

                <div class=""offcanvas offcanvas-start"" data-bs-scroll=""true"" data-bs-backdrop=""false"" tabindex=""-1"" id=""offcanvasScrolling"" aria-labelledby=""offcanvasScrollingLabel"">
                    <div class=""offcanvas-header"">
                        <h5 class=""offcanvas-title"" id=""offcanvasScrollingLabel"">Colored ");
            WriteLiteral(@"with scrolling</h5>
                        <button type=""button"" class=""btn-close text-reset"" data-bs-dismiss=""offcanvas"" aria-label=""Close""></button>
                    </div>
                    <div class=""offcanvas-body"">
                        <p>Try scrolling the rest of the page to see this option in action.</p>
                    </div>
                </div>
                <div class=""offcanvas offcanvas-start"" tabindex=""-1"" id=""offcanvasWithBackdrop"" aria-labelledby=""offcanvasWithBackdropLabel"">
                    <div class=""offcanvas-header"">
                        <h5 class=""offcanvas-title"" id=""offcanvasWithBackdropLabel"">Offcanvas with backdrop</h5>
                        <button type=""button"" class=""btn-close text-reset"" data-bs-dismiss=""offcanvas"" aria-label=""Close""></button>
                    </div>
                    <div class=""offcanvas-body"">
                        <p>.....</p>
                    </div>
                </div>
                <div class=""offca");
            WriteLiteral(@"nvas offcanvas-start"" data-bs-scroll=""true"" tabindex=""-1"" id=""offcanvasWithBothOptions"" aria-labelledby=""offcanvasWithBothOptionsLabel"">
                    <div class=""offcanvas-header"">
                        <h5 class=""offcanvas-title"" id=""offcanvasWithBothOptionsLabel"">Backdroped with scrolling</h5>
                        <button type=""button"" class=""btn-close text-reset"" data-bs-dismiss=""offcanvas"" aria-label=""Close""></button>
                    </div>
                    <div class=""offcanvas-body"">
                        <p>Try scrolling the rest of the page to see this option in action.</p>
                    </div>
                </div>
            </div>
            <!-- end card body  -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<!-- JAVASCRIPT -->
");
            __tagHelperExecutionContext = __tagHelperScopeManager.Begin("script", global::Microsoft.AspNetCore.Razor.TagHelpers.TagMode.StartTagAndEndTag, "7e21702100601572e038d9f01f15753277e0e4c713693", async() => {
            }
            );
            __Microsoft_AspNetCore_Mvc_Razor_TagHelpers_UrlResolutionTagHelper = CreateTagHelper<global::Microsoft.AspNetCore.Mvc.Razor.TagHelpers.UrlResolutionTagHelper>();
            __tagHelperExecutionContext.Add(__Microsoft_AspNetCore_Mvc_Razor_TagHelpers_UrlResolutionTagHelper);
            __tagHelperExecutionContext.AddHtmlAttribute(__tagHelperAttribute_0);
            await __tagHelperRunner.RunAsync(__tagHelperExecutionContext);
            if (!__tagHelperExecutionContext.Output.IsContentModified)
            {
                await __tagHelperExecutionContext.SetOutputContentAsync();
            }
            Write(__tagHelperExecutionContext.Output);
            __tagHelperExecutionContext = __tagHelperScopeManager.End();
            WriteLiteral("\r\n");
            __tagHelperExecutionContext = __tagHelperScopeManager.Begin("script", global::Microsoft.AspNetCore.Razor.TagHelpers.TagMode.StartTagAndEndTag, "7e21702100601572e038d9f01f15753277e0e4c714733", async() => {
            }
            );
            __Microsoft_AspNetCore_Mvc_Razor_TagHelpers_UrlResolutionTagHelper = CreateTagHelper<global::Microsoft.AspNetCore.Mvc.Razor.TagHelpers.UrlResolutionTagHelper>();
            __tagHelperExecutionContext.Add(__Microsoft_AspNetCore_Mvc_Razor_TagHelpers_UrlResolutionTagHelper);
            __tagHelperExecutionContext.AddHtmlAttribute(__tagHelperAttribute_1);
            await __tagHelperRunner.RunAsync(__tagHelperExecutionContext);
            if (!__tagHelperExecutionContext.Output.IsContentModified)
            {
                await __tagHelperExecutionContext.SetOutputContentAsync();
            }
            Write(__tagHelperExecutionContext.Output);
            __tagHelperExecutionContext = __tagHelperScopeManager.End();
            WriteLiteral("\r\n");
            __tagHelperExecutionContext = __tagHelperScopeManager.Begin("script", global::Microsoft.AspNetCore.Razor.TagHelpers.TagMode.StartTagAndEndTag, "7e21702100601572e038d9f01f15753277e0e4c715773", async() => {
            }
            );
            __Microsoft_AspNetCore_Mvc_Razor_TagHelpers_UrlResolutionTagHelper = CreateTagHelper<global::Microsoft.AspNetCore.Mvc.Razor.TagHelpers.UrlResolutionTagHelper>();
            __tagHelperExecutionContext.Add(__Microsoft_AspNetCore_Mvc_Razor_TagHelpers_UrlResolutionTagHelper);
            __tagHelperExecutionContext.AddHtmlAttribute(__tagHelperAttribute_2);
            await __tagHelperRunner.RunAsync(__tagHelperExecutionContext);
            if (!__tagHelperExecutionContext.Output.IsContentModified)
            {
                await __tagHelperExecutionContext.SetOutputContentAsync();
            }
            Write(__tagHelperExecutionContext.Output);
            __tagHelperExecutionContext = __tagHelperScopeManager.End();
            WriteLiteral("\r\n");
            __tagHelperExecutionContext = __tagHelperScopeManager.Begin("script", global::Microsoft.AspNetCore.Razor.TagHelpers.TagMode.StartTagAndEndTag, "7e21702100601572e038d9f01f15753277e0e4c716813", async() => {
            }
            );
            __Microsoft_AspNetCore_Mvc_Razor_TagHelpers_UrlResolutionTagHelper = CreateTagHelper<global::Microsoft.AspNetCore.Mvc.Razor.TagHelpers.UrlResolutionTagHelper>();
            __tagHelperExecutionContext.Add(__Microsoft_AspNetCore_Mvc_Razor_TagHelpers_UrlResolutionTagHelper);
            __tagHelperExecutionContext.AddHtmlAttribute(__tagHelperAttribute_3);
            await __tagHelperRunner.RunAsync(__tagHelperExecutionContext);
            if (!__tagHelperExecutionContext.Output.IsContentModified)
            {
                await __tagHelperExecutionContext.SetOutputContentAsync();
            }
            Write(__tagHelperExecutionContext.Output);
            __tagHelperExecutionContext = __tagHelperScopeManager.End();
            WriteLiteral("\r\n");
            __tagHelperExecutionContext = __tagHelperScopeManager.Begin("script", global::Microsoft.AspNetCore.Razor.TagHelpers.TagMode.StartTagAndEndTag, "7e21702100601572e038d9f01f15753277e0e4c717853", async() => {
            }
            );
            __Microsoft_AspNetCore_Mvc_Razor_TagHelpers_UrlResolutionTagHelper = CreateTagHelper<global::Microsoft.AspNetCore.Mvc.Razor.TagHelpers.UrlResolutionTagHelper>();
            __tagHelperExecutionContext.Add(__Microsoft_AspNetCore_Mvc_Razor_TagHelpers_UrlResolutionTagHelper);
            __tagHelperExecutionContext.AddHtmlAttribute(__tagHelperAttribute_4);
            await __tagHelperRunner.RunAsync(__tagHelperExecutionContext);
            if (!__tagHelperExecutionContext.Output.IsContentModified)
            {
                await __tagHelperExecutionContext.SetOutputContentAsync();
            }
            Write(__tagHelperExecutionContext.Output);
            __tagHelperExecutionContext = __tagHelperScopeManager.End();
            WriteLiteral("\r\n\r\n");
            __tagHelperExecutionContext = __tagHelperScopeManager.Begin("script", global::Microsoft.AspNetCore.Razor.TagHelpers.TagMode.StartTagAndEndTag, "7e21702100601572e038d9f01f15753277e0e4c718897", async() => {
            }
            );
            __Microsoft_AspNetCore_Mvc_Razor_TagHelpers_UrlResolutionTagHelper = CreateTagHelper<global::Microsoft.AspNetCore.Mvc.Razor.TagHelpers.UrlResolutionTagHelper>();
            __tagHelperExecutionContext.Add(__Microsoft_AspNetCore_Mvc_Razor_TagHelpers_UrlResolutionTagHelper);
            __tagHelperExecutionContext.AddHtmlAttribute(__tagHelperAttribute_5);
            await __tagHelperRunner.RunAsync(__tagHelperExecutionContext);
            if (!__tagHelperExecutionContext.Output.IsContentModified)
            {
                await __tagHelperExecutionContext.SetOutputContentAsync();
            }
            Write(__tagHelperExecutionContext.Output);
            __tagHelperExecutionContext = __tagHelperScopeManager.End();
        }
        #pragma warning restore 1998
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.ViewFeatures.IModelExpressionProvider ModelExpressionProvider { get; private set; }
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.IUrlHelper Url { get; private set; }
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.IViewComponentHelper Component { get; private set; }
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.Rendering.IJsonHelper Json { get; private set; }
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.Rendering.IHtmlHelper<dynamic> Html { get; private set; }
    }
}
#pragma warning restore 1591
