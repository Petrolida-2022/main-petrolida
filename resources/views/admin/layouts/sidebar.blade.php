<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header">
    <div>
      <img src="/img/logo-only.png" class="logo-icon" alt="logo icon">
    </div>
    <div>
      <h4 class="logo-text fs-6">Petrolida Admin</h4>
    </div>
    <div class="toggle-icon ms-auto"><i class="bi bi-chevron-double-left"></i>
    </div>
  </div>
  <!--navigation-->
  <ul class="metismenu" id="menu">
    
    <li class="{{ Request::is('/') ? 'mm-active' : '' }}">
      <a href="/">
        <div class="parent-icon"><i class="bi bi-house-door"></i>
        </div>
        <div class="menu-title" style="font-size: 13px">Dashboard</div>
      </a>
    </li>
    
    <li class="menu-label">Competitions</li>
    {{-- ORDC --}}
    <li class="{{ Request::is('ordc**') ? 'mm-active' : '' }}">
      <a class="has-arrow" href="#"  aria-expanded="true">
        <div class="parent-icon"><i class="bi bi-circle"></i>
        </div>
        <div class="menu-title" style="font-size: 13px">Oil Rig Design</div>
      </a>
      <ul class="mm-collapse {{ Request::is('ordc**') ? 'mm-show' : '' }}" style="">
        <li class="{{ Request::is('ordc/team') ? 'mm-active' : '' }}""> 
          <a href="/ordc/team">
            <i class="bi bi-arrow-right-short"></i>Team Data
          </a>
        </li>
        <li class="{{ Request::is('ordc/leader') ? 'mm-active' : '' }}""> 
          <a href="/ordc/leader">
            <i class="bi bi-arrow-right-short"></i>Leader Data
          </a>
        </li>
        <li class="{{ Request::is('ordc/members') ? 'mm-active' : '' }}""> 
          <a href="/ordc/members">
            <i class="bi bi-arrow-right-short"></i>Members Data
          </a>
        </li>
      </ul>
    </li>
    {{-- End of ORDC --}}

    {{-- FFDC --}}
    <li class="{{ Request::is('ffdc**') ? 'mm-active' : '' }}">
      <a class="has-arrow" href="#"  aria-expanded="true">
        <div class="parent-icon"><i class="bi bi-circle"></i>
        </div>
        <div class="menu-title" style="font-size: 13px">Fracturing Fluid Design</div>
      </a>
      <ul class="mm-collapse {{ Request::is('ffdc**') ? 'mm-show' : '' }}" style="">
        <li class="{{ Request::is('ffdc/team') ? 'mm-active' : '' }}""> 
          <a href="/ffdc/team">
            <i class="bi bi-arrow-right-short"></i>Team Data
          </a>
        </li>
        <li class="{{ Request::is('ffdc/leader') ? 'mm-active' : '' }}""> 
          <a href="/ffdc/leader">
            <i class="bi bi-arrow-right-short"></i>Leader Data
          </a>
        </li>
        <li class="{{ Request::is('ffdc/members') ? 'mm-active' : '' }}""> 
          <a href="/ffdc/members">
            <i class="bi bi-arrow-right-short"></i>Members Data
          </a>
        </li>
      </ul>
    </li>
    {{-- End of FFDC --}}

    {{-- Petrosmart --}}
    <li class="{{ Request::is('petrosmart**') ? 'mm-active' : '' }}">
      <a class="has-arrow" href="#"  aria-expanded="true">
        <div class="parent-icon"><i class="bi bi-circle"></i>
        </div>
        <div class="menu-title" style="font-size: 13px">Petrosmart</div>
      </a>
      <ul class="mm-collapse {{ Request::is('petrosmart**') ? 'mm-show' : '' }}" style="">
        <li class="{{ Request::is('petrosmart/team') ? 'mm-active' : '' }}""> 
          <a href="/petrosmart/team">
            <i class="bi bi-arrow-right-short"></i>Team Data
          </a>
        </li>
        <li class="{{ Request::is('petrosmart/leader') ? 'mm-active' : '' }}""> 
          <a href="/petrosmart/leader">
            <i class="bi bi-arrow-right-short"></i>Leader Data
          </a>
        </li>
        <li class="{{ Request::is('petrosmart/members') ? 'mm-active' : '' }}""> 
          <a href="/petrosmart/members">
            <i class="bi bi-arrow-right-short"></i>Members Data
          </a>
        </li>
      </ul>
    </li>
    {{-- End of Petrosmart --}}

    {{-- Paper --}}
    <li class="{{ Request::is('paper**') ? 'mm-active' : '' }}">
      <a class="has-arrow" href="#"  aria-expanded="true">
        <div class="parent-icon"><i class="bi bi-circle"></i>
        </div>
        <div class="menu-title" style="font-size: 13px">Paper</div>
      </a>
      <ul class="mm-collapse {{ Request::is('paper**') ? 'mm-show' : '' }}" style="">
        <li class="{{ Request::is('paper/team') ? 'mm-active' : '' }}""> 
          <a href="/paper/team">
            <i class="bi bi-arrow-right-short"></i>Team Data
          </a>
        </li>
        <li class="{{ Request::is('paper/leader') ? 'mm-active' : '' }}""> 
          <a href="/paper/leader">
            <i class="bi bi-arrow-right-short"></i>Leader Data
          </a>
        </li>
        <li class="{{ Request::is('paper/members') ? 'mm-active' : '' }}""> 
          <a href="/paper/members">
            <i class="bi bi-arrow-right-short"></i>Members Data
          </a>
        </li>
      </ul>
    </li>
    {{-- End of Paper --}}

    {{-- STC --}}
    <li class="{{ Request::is('stc**') ? 'mm-active' : '' }}">
      <a class="has-arrow" href="#"  aria-expanded="true">
        <div class="parent-icon"><i class="bi bi-circle"></i>
        </div>
        <div class="menu-title" style="font-size: 13px">Stock Trading</div>
      </a>
      <ul class="mm-collapse {{ Request::is('stc**') ? 'mm-show' : '' }}" style="">
        <li class="{{ Request::is('stc/team') ? 'mm-active' : '' }}""> 
          <a href="/stc/team">
            <i class="bi bi-arrow-right-short"></i>Team Data
          </a>
        </li>
        <li class="{{ Request::is('stc/leader') ? 'mm-active' : '' }}""> 
          <a href="/stc/leader">
            <i class="bi bi-arrow-right-short"></i>Leader Data
          </a>
        </li>
        <li class="{{ Request::is('stc/members') ? 'mm-active' : '' }}""> 
          <a href="/stc/members">
            <i class="bi bi-arrow-right-short"></i>Members Data
          </a>
        </li>
      </ul>
    </li>
    {{-- End of STC --}}

    {{-- BCC --}}
    <li class="{{ Request::is('bcc**') ? 'mm-active' : '' }}">
      <a class="has-arrow" href="#"  aria-expanded="true">
        <div class="parent-icon"><i class="bi bi-circle"></i>
        </div>
        <div class="menu-title" style="font-size: 13px">Business Case</div>
      </a>
      <ul class="mm-collapse {{ Request::is('bcc**') ? 'mm-show' : '' }}" style="">
        <li class="{{ Request::is('bcc/team') ? 'mm-active' : '' }}""> 
          <a href="/bcc/team">
            <i class="bi bi-arrow-right-short"></i>Team Data
          </a>
        </li>
        <li class="{{ Request::is('bcc/leader') ? 'mm-active' : '' }}""> 
          <a href="/bcc/leader">
            <i class="bi bi-arrow-right-short"></i>Leader Data
          </a>
        </li>
        <li class="{{ Request::is('bcc/members') ? 'mm-active' : '' }}""> 
          <a href="/bcc/members">
            <i class="bi bi-arrow-right-short"></i>Members Data
          </a>
        </li>
      </ul>
    </li>
    {{-- End of BCC --}}

    {{-- CS --}}
    <li class="{{ Request::is('cs**') ? 'mm-active' : '' }}">
      <a class="has-arrow" href="#"  aria-expanded="true">
        <div class="parent-icon"><i class="bi bi-circle"></i>
        </div>
        <div class="menu-title" style="font-size: 13px">Case Study</div>
      </a>
      <ul class="mm-collapse {{ Request::is('cs**') ? 'mm-show' : '' }}" style="">
        <li class="{{ Request::is('cs/team') ? 'mm-active' : '' }}""> 
          <a href="/cs/team">
            <i class="bi bi-arrow-right-short"></i>Team Data
          </a>
        </li>
        <li class="{{ Request::is('cs/leader') ? 'mm-active' : '' }}""> 
          <a href="/cs/leader">
            <i class="bi bi-arrow-right-short"></i>Leader Data
          </a>
        </li>
        <li class="{{ Request::is('cs/members') ? 'mm-active' : '' }}""> 
          <a href="/cs/members">
            <i class="bi bi-arrow-right-short"></i>Members Data
          </a>
        </li>
      </ul>
    </li>
    {{-- End of CS --}}

  </ul>
  <!--end navigation-->
</aside>
<!--end sidebar -->