



  

 var pira = function() { 

   return {      
  


         
                 
  AF : "" ,       //AF           AF=            *AF         *AF=        Alternative Frequencies                        
  AFCH : "" ,     //AFCH         AFCH=          *AFCH                   Alternative Frequency Channels
  DI : "" ,      //DI           DI=            *DI                     Decoder Identification
  DPS1 : ""  ,    //DPS1         DPS1=          *DPS1                   Dynamic PS 1
  DPS1ENQ : "",   //             DPS1ENQ=                               Dynamic PS 1 Enqueue
  DPS2 : "" ,     //DPS2         DPS2=          *DPS2                   Dynamic PS 2
  DPS1MOD : "",   //DPS1MOD      DPS1MOD=       *DPS1MOD                Dynamic PS 1 Mode
  DPS2MOD : "",   //DPS2MOD      DPS2MOD=       *DPS2MOD                Dynamic PS 2 Mode
  DPS1REP : "",   //DPS1REP      DPS1REP=       *DPS1REP                Dynamic PS 1 Number of Repeating
  DPS2REP : "",   //DPS2REP      DPS2REP=       *DPS2REP                Dynamic PS 2 Number of Repeating
  DTTMOUT : "",   //DTTMOUT      DTTMOUT=       *DTTMOUT                Default Text Timeout
  EQTEXT1 : "",   //EQTEXT1      EQTEXT1=       *EQTEXT1                Equal Text 1
  LABPER : "",    //LABPER       LABPER=        *LABPER                 Label Period
  MS : document.getElementById("MS").value,        //MS           MS=            *MS                     Music/Speech
  PI : document.getElementById("PI").value,        //PI           PI=            *PI                     Program Identification
  PS : document.getElementById("PS").value,        //PS           PS=            *PS                     Program Service name
  PTY : document.getElementById("PTY").value,       //PTY          PTY=           *PTY                    Program Type number
  PTYN : "",      //PTYN         PTYN=          *PTYN                   Program Type Name
  PTYNEN : "",    //PTYNEN       PTYNEN=        *PTYNEN                 PTYN Enable
  RT1 : document.getElementById("RT1").value,       //RT1          RT1=           *RT1                    Radiotext 1
  RT1EN : "",     //RT1EN        RT1EN=         *RT1EN                  RT1 Enable
  RT2 : "",       //RT2          RT2=           *RT2                    Radiotext 2
  RT2EN : "",     //RT2EN        RT2EN=         *RT2EN                  RT2 Enable
  RTPER : "",     //RTPER        RTPER=         *RTPER                  Radiotext Switching Period
  RTTYPE : "",    //RTTYPE       RTTYPE=        *RTTYPE                 Radiotext Type
  RSTDPS : "",    //RSTDPS       RSTDPS=        *RSTDPS                 Restart Dynamic PS
  SCRLSPD : "",   //SCRLSPD      SCRLSPD=       *SCRLSPD                Scrolling PS Speed
  SPSPER : "",    //SPSPER       SPSPER=        *SPSPER                 Static PS Period
  TA : "",        //TA           TA=            *TA                     Traffic Announcement
  TATMOUT : "",   //TATMOUT      TATMOUT=       *TATMOUT                TA Timeout
  TP : document.getElementById("TP").checked,        //TP           TP=            *TP                     Traffic Program
  TPS : "",       //TPS          TPS=           *TPS                    Traffic PS
  INIT : "",      //INIT                                                Initialization
  ALL : "",       //                            *ALL                    Store All
  HELP : "",      //HELP                                                Help
               //
               //
               //_______________________________________________________________________________________ 
               //EON:
               //_______________________________________________________________________________________
               //
  EONxAF : "",    //EONxAF      EONxAF=                                 EON x Frequencies
  EONxAFCH : "",  //EONxAFCH    EONxAFCH=                               EON x Frequency channels
  EONxEN : "",    //EONxEN      EONxEN=                                 EON x Enable
  EONxPI : "",    //EONxPI      EONxPI=                                 EON x Program Identification
  EONxPIN : "",   //EONxPIN     EONxPIN=                                EON x Program Item Number
  EONxPS : "",    //EONxPS      EONxPS=                                 EON x Program Service name
  EONxPTY : "",   //EONxPTY     EONxPTY=                                EON x Program Type number
  EONxTA : "",    //EONxTA      EONxTA=                                 EON x Traffic Announcement
  EONxTP : "",    //EONxTP      EONxTP=                                 EON x Traffic Program
  EON : "",       //                            *EON                    Store all EON data into EEPROM
               //x is in range 1-4
               //
               //
               //_______________________________________________________________________________________ 
               //Messages:
               //_______________________________________________________________________________________
               //
               //
               //
               //
  MSGxx : "",     //MSGxx                                *MSGxx=        Text Message
  MSGxxD : "",    //MSGxxD                               *MSGxxD=       Message Destination
  MSGLIST : "",   //MSGLIST                                             List of Messages
  DPS2MSG : "",   //DPS2MSG     DPS2MSG=    *DPS2MSG                    Dynamic PS 2 Message Number
  RT2MSG : "",    //RT2MSG      RT2MSG=     *RT2MSG                     Radiotext 2 Message Number
               //xx is in decimal range 01-99
               //
               //
               //
               //_______________________________________________________________________________________ 
               //Scheduling:
               //_______________________________________________________________________________________
               //
               //
  S : "",         //S                                                   List of Scheduling Items
  SxxC : "",      //SxxC                                *SxxC=          Scheduling Item Command
  SxxD : "",      //SxxD                                *SxxD=          Scheduling Item Days
  SxxP : "",      //SxxP                                *SxxP=          Scheduling Item PTY
  SxxT : "",      //SxxT                                *SxxT= S        cheduling Item Times
  SEN : "",       //SEN         SEN=        *SEN                        Scheduling Enable
               //xx is in decimal range 01-48
               //
               //
               //_______________________________________________________________________________________ 
              //System:
              //_______________________________________________________________________________________
              //
              //
  COMSPD : "",   //COMSPD      COMSPD=     *COMSPD                     COM Port Speed
  CT : "",       //CT          CT=         *CT                         Clock Time and Date
  DATE : "",     //            DATE=       *DATE                       Date
  ECHO : "",     //ECHO        ECHO=       *ECHO                       Terminal Echo
  EXTSYNC : "",  //EXTSYNC     EXTSYNC=    *EXTSYNC                    External Pilot Synchronization
  LEVEL : "",    //LEVEL       LEVEL= *     LEVEL                      RDS Signal Level
  LTO : "",      //LTO         LTO=        *LTO                        Local Time Offset
  MJD : "",      //MJD         MJD=        *MDJ                        Modified Julian Day
  PHASE : "",    //PHASE       PHASE=      *PHASE                      RDS Signal Phase
  PILOT : "",    //PILOT                                               Pilot Tone Present
              //
  RDSGEN : "",   //RDSGEN      RDSGEN=     *RDSGEN                     RDS Generator
  RESET : "",    //RESET                                               Reset
  SPEED : "",    //SPEED       SPEED=      *SPEED                      COM Port Speed
  STATUS : "",   //STATUS                                              RDS Encoder Status
  TIME : "",     //TIME        TIME=       *TIME                       Time
  VER : "",      //VER                                                 Firmware Version
              //
              //
              //
              //_______________________________________________________________________________________ 
              //Advanced:
              //_______________________________________________________________________________________
              //
              //
              //
  ADR : "",      //ADR                                 *ADR=           Encoder Address
  CC : "",       //CC                                  *CC=            Conditional Command
  ECC : "",      //ECC         ECC=        *ECC                        Extended Country Code
  ECCEN : "",    //ECCEN       ECCEN=      *ECCEN                      ECC and LIC Enable
  G : "",        //            G=                                      Group
  GRPSEQ : "",   //GRPSEQ      GRPSEQ=     *GRPSEQ                     Group Sequence
  LIC : "",      //LIC         LIC=        *LIC                        Language Identification Code
  NOHDR : "",    //NOHDR                               *NOHDR=         No Header Communication
  PIN : "",      //PIN         PIN=        *PIN                        Program Item Number
  PINEN : "",    //PINEN       PINEN=      *PINEN                      PIN Enable
  PROGRAM : "",  //PROGRAM     PROGRAM=    *PROGRAM                    Program Set
  PSW : "",      //PSW                                                 PS Window
  RTP : "",      //RTP         RTP=                                    Radiotext Plus Tagging Data
  RTPRUN : "",   //RTPRUN      RTPRUN=                                 Radiotext Plus Running Bit
  SEL : "",      //            SEL=                                    Select Encoder
  SHORTRT : "",  //SHORTRT     SHORTRT=    *SHORTRT                    Short Radiotext
  SITE : "",     //SITE                                 *SITE=         Site Address
  UDG1 : "",     //UDG1        UDG1=       *UDG1                       User Defined Groups 1
  UDG2 : "",     //UDG2        UDG2=       *UDG2                       User Defined Groups 2
  UECP : ""     //UECP        UECP=       *UECP                       UECP Enable
              //>xxxxxxx                                            Assign Last Value
             //
             //
             //xxxxxxx is any command from the second column without ‘=’
             //
             //
              
 }
  }; 
              
             
   
   
   
var UECP = function() { 
  return {
                                  
                                  
  // the u infront of MECs most be taking way 
  // with string formating when sending to the encoder                             
                                  
  //MEC        Function
  u01 : "",    // Pl
  u02 : "",    // PS
  u03 : "",    // TAfl‘P
  u04 : "",    // Dl/PTYI
  u05 : "",    // MS
  u06 : "",    // PIN
  u07 : "",    // PTY
  u08 : "",    // Paging call with numeric message (10 digits)
  u09 : "",    // Real time clock correction
  u0A : "",    // RT
  u0B : "",    // PSN enable/disable
  u0C : "",    // Paging call without message
  u0D : "",    // Real time clock
  u0F : "",    // RDS level
  u10 : "",    // International paging with functions message
  u11 : "",    // International paging with numeric messag (15 digits)
  u12 : "",    // Transmimr network group designation
  u13 : "",    // AF
  u14 : "",    // EON - AF
  u15 : "",    // EON - TA control
  u16 : "",    // Group sequence
  u17 : "",    // Bi-directional comimnds (Remote and configuration commands) Request message
  u18 : "",    // Bi-directional comnnnds (Remote and configuratim commands) Message acknowledgment
  u19 : "",    // CT On/Off
  uIA : "",    // Slow Labeling codes
  u1B : "",    // Paging call with alphanumeric messag (80 characnrs)
  u1C : "",    // Data set select
  u1D : "",    // Reference input select
  uIE : "",    // RDS On/Off
  u20 : "",    // Paging call with numeric message (18 digits)
  u22 : "",    // RDS phase
  u23 : "",    // Site address
  u24 : "",    // Free-format group
  u25 : "",    // IH
  u26 : "",    // TDC
  u27 : "",    // Encoder address
  u28 : "",    // Make PSN list
  u29 : "",    // Group variant code sequence
  u2A : "",    // TA control
  u2B : "",    // EWS
  u2C : "",    // Communication mode
  u2D : "",    // Manufacture's / Network operator‘s specific comrmnd
  u2E : "",    // Linkage informatim
  u30 : "",    // TMC
  u31 : "",    // EPP transmitter information
  u32 : "",    // EPP call without additional message
  u33 : "",    // EPP national and international call with alphanumeric message
  u34 : "",    // EPP national and international call with variable length numeric message
  u35 : "",    // EPP national and international call with variable length functions message
  u38 : "",    // Extended group sequence
  u3A : "",    // Encoder access right
  u3B : "",    // Communications Port Configuration - Mode
  u3C : "",    // Communications Port Configuration - Speed
  u3D : "",    // Communications Port Configuration - Timeout
  u3F : "",    // PTYN
  u3F : "",    // EON elements enable/disable
  u40 : "",    // ODA configuration and short message command
  u41 : "",    // ODA identification group usage sequence
  u42 : "",    // ODA free-format group
  u43 : "",    // ODA relative priority group sequence
  u44 : "",    // ODA "Burst mode" control
  u45 : "",    // ODA "Spinning Wheel" timing control
  u46 : "",    // ODA data
  u47 : "",    // ODA data command access right
  u48 : "",    // DAB: Dynamic Label command
  uAA : "",    // DAB: Dynamic Label message (DL)
  uDA : ""    // DVB-S: Rass - Radio screen show
  // EC to FC 108 Astra ADR special commands (Reserved range)                                
                                  
     }  
        };
             
             
   
   
          
         
           
