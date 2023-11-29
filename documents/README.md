# Projeto Site Imobiliário - Green House

## O projeto

O projeto de site imobiliário Green house é um projeto de site que possui como principal característica a consistência de um CRUD (Create, Read, Update and Delete) completo com banco de dados.

## Características

- Área do cliente, com interação, login, e itens;
- Área de administraodr, com interação, e organização de itens do banco de dados e clientes (usuários);

## Estrutura de pastas do projeto

greenHouse/
├── adm-area
│   ├── controllers
│   ├── models
│   └── views
│       ├── assets
│       │   └── img
│       ├── css
│       │   └── login-adm.css
│       ├── js
│       └── login-adm.php
├── assets
│   ├── fonts
│   │   ├── Archivo
│   │   │   ├── Archivo-Italic-VariableFont_wdth,wght.ttf
│   │   │   ├── Archivo-VariableFont_wdth,wght.ttf
│   │   │   ├── OFL.txt
│   │   │   ├── README.txt
│   │   │   └── static
│   │   │       ├── Archivo-BlackItalic.ttf
│   │   │       ├── Archivo-Black.ttf
│   │   │       ├── Archivo-BoldItalic.ttf
│   │   │       ├── Archivo-Bold.ttf
│   │   │       ├── Archivo_Condensed-BlackItalic.ttf
│   │   │       ├── Archivo_Condensed-Black.ttf
│   │   │       ├── Archivo_Condensed-BoldItalic.ttf
│   │   │       ├── Archivo_Condensed-Bold.ttf
│   │   │       ├── Archivo_Condensed-ExtraBoldItalic.ttf
│   │   │       ├── Archivo_Condensed-ExtraBold.ttf
│   │   │       ├── Archivo_Condensed-ExtraLightItalic.ttf
│   │   │       ├── Archivo_Condensed-ExtraLight.ttf
│   │   │       ├── Archivo_Condensed-Italic.ttf
│   │   │       ├── Archivo_Condensed-LightItalic.ttf
│   │   │       ├── Archivo_Condensed-Light.ttf
│   │   │       ├── Archivo_Condensed-MediumItalic.ttf
│   │   │       ├── Archivo_Condensed-Medium.ttf
│   │   │       ├── Archivo_Condensed-Regular.ttf
│   │   │       ├── Archivo_Condensed-SemiBoldItalic.ttf
│   │   │       ├── Archivo_Condensed-SemiBold.ttf
│   │   │       ├── Archivo_Condensed-ThinItalic.ttf
│   │   │       ├── Archivo_Condensed-Thin.ttf
│   │   │       ├── Archivo_Expanded-BlackItalic.ttf
│   │   │       ├── Archivo_Expanded-Black.ttf
│   │   │       ├── Archivo_Expanded-BoldItalic.ttf
│   │   │       ├── Archivo_Expanded-Bold.ttf
│   │   │       ├── Archivo_Expanded-ExtraBoldItalic.ttf
│   │   │       ├── Archivo_Expanded-ExtraBold.ttf
│   │   │       ├── Archivo_Expanded-ExtraLightItalic.ttf
│   │   │       ├── Archivo_Expanded-ExtraLight.ttf
│   │   │       ├── Archivo_Expanded-Italic.ttf
│   │   │       ├── Archivo_Expanded-LightItalic.ttf
│   │   │       ├── Archivo_Expanded-Light.ttf
│   │   │       ├── Archivo_Expanded-MediumItalic.ttf
│   │   │       ├── Archivo_Expanded-Medium.ttf
│   │   │       ├── Archivo_Expanded-Regular.ttf
│   │   │       ├── Archivo_Expanded-SemiBoldItalic.ttf
│   │   │       ├── Archivo_Expanded-SemiBold.ttf
│   │   │       ├── Archivo_Expanded-ThinItalic.ttf
│   │   │       ├── Archivo_Expanded-Thin.ttf
│   │   │       ├── Archivo-ExtraBoldItalic.ttf
│   │   │       ├── Archivo-ExtraBold.ttf
│   │   │       ├── Archivo_ExtraCondensed-BlackItalic.ttf
│   │   │       ├── Archivo_ExtraCondensed-Black.ttf
│   │   │       ├── Archivo_ExtraCondensed-BoldItalic.ttf
│   │   │       ├── Archivo_ExtraCondensed-Bold.ttf
│   │   │       ├── Archivo_ExtraCondensed-ExtraBoldItalic.ttf
│   │   │       ├── Archivo_ExtraCondensed-ExtraBold.ttf
│   │   │       ├── Archivo_ExtraCondensed-ExtraLightItalic.ttf
│   │   │       ├── Archivo_ExtraCondensed-ExtraLight.ttf
│   │   │       ├── Archivo_ExtraCondensed-Italic.ttf
│   │   │       ├── Archivo_ExtraCondensed-LightItalic.ttf
│   │   │       ├── Archivo_ExtraCondensed-Light.ttf
│   │   │       ├── Archivo_ExtraCondensed-MediumItalic.ttf
│   │   │       ├── Archivo_ExtraCondensed-Medium.ttf
│   │   │       ├── Archivo_ExtraCondensed-Regular.ttf
│   │   │       ├── Archivo_ExtraCondensed-SemiBoldItalic.ttf
│   │   │       ├── Archivo_ExtraCondensed-SemiBold.ttf
│   │   │       ├── Archivo_ExtraCondensed-ThinItalic.ttf
│   │   │       ├── Archivo_ExtraCondensed-Thin.ttf
│   │   │       ├── Archivo-ExtraLightItalic.ttf
│   │   │       ├── Archivo-ExtraLight.ttf
│   │   │       ├── Archivo-Italic.ttf
│   │   │       ├── Archivo-LightItalic.ttf
│   │   │       ├── Archivo-Light.ttf
│   │   │       ├── Archivo-MediumItalic.ttf
│   │   │       ├── Archivo-Medium.ttf
│   │   │       ├── Archivo-Regular.ttf
│   │   │       ├── Archivo-SemiBoldItalic.ttf
│   │   │       ├── Archivo-SemiBold.ttf
│   │   │       ├── Archivo_SemiCondensed-BlackItalic.ttf
│   │   │       ├── Archivo_SemiCondensed-Black.ttf
│   │   │       ├── Archivo_SemiCondensed-BoldItalic.ttf
│   │   │       ├── Archivo_SemiCondensed-Bold.ttf
│   │   │       ├── Archivo_SemiCondensed-ExtraBoldItalic.ttf
│   │   │       ├── Archivo_SemiCondensed-ExtraBold.ttf
│   │   │       ├── Archivo_SemiCondensed-ExtraLightItalic.ttf
│   │   │       ├── Archivo_SemiCondensed-ExtraLight.ttf
│   │   │       ├── Archivo_SemiCondensed-Italic.ttf
│   │   │       ├── Archivo_SemiCondensed-LightItalic.ttf
│   │   │       ├── Archivo_SemiCondensed-Light.ttf
│   │   │       ├── Archivo_SemiCondensed-MediumItalic.ttf
│   │   │       ├── Archivo_SemiCondensed-Medium.ttf
│   │   │       ├── Archivo_SemiCondensed-Regular.ttf
│   │   │       ├── Archivo_SemiCondensed-SemiBoldItalic.ttf
│   │   │       ├── Archivo_SemiCondensed-SemiBold.ttf
│   │   │       ├── Archivo_SemiCondensed-ThinItalic.ttf
│   │   │       ├── Archivo_SemiCondensed-Thin.ttf
│   │   │       ├── Archivo_SemiExpanded-BlackItalic.ttf
│   │   │       ├── Archivo_SemiExpanded-Black.ttf
│   │   │       ├── Archivo_SemiExpanded-BoldItalic.ttf
│   │   │       ├── Archivo_SemiExpanded-Bold.ttf
│   │   │       ├── Archivo_SemiExpanded-ExtraBoldItalic.ttf
│   │   │       ├── Archivo_SemiExpanded-ExtraBold.ttf
│   │   │       ├── Archivo_SemiExpanded-ExtraLightItalic.ttf
│   │   │       ├── Archivo_SemiExpanded-ExtraLight.ttf
│   │   │       ├── Archivo_SemiExpanded-Italic.ttf
│   │   │       ├── Archivo_SemiExpanded-LightItalic.ttf
│   │   │       ├── Archivo_SemiExpanded-Light.ttf
│   │   │       ├── Archivo_SemiExpanded-MediumItalic.ttf
│   │   │       ├── Archivo_SemiExpanded-Medium.ttf
│   │   │       ├── Archivo_SemiExpanded-Regular.ttf
│   │   │       ├── Archivo_SemiExpanded-SemiBoldItalic.ttf
│   │   │       ├── Archivo_SemiExpanded-SemiBold.ttf
│   │   │       ├── Archivo_SemiExpanded-ThinItalic.ttf
│   │   │       ├── Archivo_SemiExpanded-Thin.ttf
│   │   │       ├── Archivo-ThinItalic.ttf
│   │   │       └── Archivo-Thin.ttf
│   │   ├── CovesTypeface
│   │   │   ├── Coves Bold.otf
│   │   │   ├── Coves Light.otf
│   │   │   └── License.txt
│   │   ├── Inter
│   │   │   ├── Inter-VariableFont_slnt,wght.ttf
│   │   │   ├── OFL.txt
│   │   │   ├── README.txt
│   │   │   └── static
│   │   │       ├── Inter-Black.ttf
│   │   │       ├── Inter-Bold.ttf
│   │   │       ├── Inter-ExtraBold.ttf
│   │   │       ├── Inter-ExtraLight.ttf
│   │   │       ├── Inter-Light.ttf
│   │   │       ├── Inter-Medium.ttf
│   │   │       ├── Inter-Regular.ttf
│   │   │       ├── Inter-SemiBold.ttf
│   │   │       └── Inter-Thin.ttf
│   │   ├── Jost
│   │   │   ├── Jost-Italic-VariableFont_wght.ttf
│   │   │   ├── Jost-VariableFont_wght.ttf
│   │   │   ├── OFL.txt
│   │   │   ├── README.txt
│   │   │   └── static
│   │   │       ├── Jost-BlackItalic.ttf
│   │   │       ├── Jost-Black.ttf
│   │   │       ├── Jost-BoldItalic.ttf
│   │   │       ├── Jost-Bold.ttf
│   │   │       ├── Jost-ExtraBoldItalic.ttf
│   │   │       ├── Jost-ExtraBold.ttf
│   │   │       ├── Jost-ExtraLightItalic.ttf
│   │   │       ├── Jost-ExtraLight.ttf
│   │   │       ├── Jost-Italic.ttf
│   │   │       ├── Jost-LightItalic.ttf
│   │   │       ├── Jost-Light.ttf
│   │   │       ├── Jost-MediumItalic.ttf
│   │   │       ├── Jost-Medium.ttf
│   │   │       ├── Jost-Regular.ttf
│   │   │       ├── Jost-SemiBoldItalic.ttf
│   │   │       ├── Jost-SemiBold.ttf
│   │   │       ├── Jost-ThinItalic.ttf
│   │   │       └── Jost-Thin.ttf
│   │   ├── Lato
│   │   │   ├── Lato-BlackItalic.ttf
│   │   │   ├── Lato-Black.ttf
│   │   │   ├── Lato-BoldItalic.ttf
│   │   │   ├── Lato-Bold.ttf
│   │   │   ├── Lato-Italic.ttf
│   │   │   ├── Lato-LightItalic.ttf
│   │   │   ├── Lato-Light.ttf
│   │   │   ├── Lato-Regular.ttf
│   │   │   ├── Lato-ThinItalic.ttf
│   │   │   ├── Lato-Thin.ttf
│   │   │   └── OFL.txt
│   │   ├── Montserrat
│   │   │   ├── Montserrat-Italic-VariableFont_wght.ttf
│   │   │   ├── Montserrat-VariableFont_wght.ttf
│   │   │   ├── Montserrat.zip
│   │   │   ├── OFL.txt
│   │   │   ├── README.txt
│   │   │   └── static
│   │   │       ├── Montserrat-BlackItalic.ttf
│   │   │       ├── Montserrat-Black.ttf
│   │   │       ├── Montserrat-BoldItalic.ttf
│   │   │       ├── Montserrat-Bold.ttf
│   │   │       ├── Montserrat-ExtraBoldItalic.ttf
│   │   │       ├── Montserrat-ExtraBold.ttf
│   │   │       ├── Montserrat-ExtraLightItalic.ttf
│   │   │       ├── Montserrat-ExtraLight.ttf
│   │   │       ├── Montserrat-Italic.ttf
│   │   │       ├── Montserrat-LightItalic.ttf
│   │   │       ├── Montserrat-Light.ttf
│   │   │       ├── Montserrat-MediumItalic.ttf
│   │   │       ├── Montserrat-Medium.ttf
│   │   │       ├── Montserrat-Regular.ttf
│   │   │       ├── Montserrat-SemiBoldItalic.ttf
│   │   │       ├── Montserrat-SemiBold.ttf
│   │   │       ├── Montserrat-ThinItalic.ttf
│   │   │       └── Montserrat-Thin.ttf
│   │   ├── Noto
│   │   │   ├── NotoSansMandaic-Regular.ttf
│   │   │   └── OFL.txt
│   │   ├── Nunito
│   │   │   ├── NunitoSans-Italic-VariableFont_YTLC,opsz,wdth,wght.ttf
│   │   │   ├── NunitoSans-VariableFont_YTLC,opsz,wdth,wght.ttf
│   │   │   ├── OFL.txt
│   │   │   ├── README.txt
│   │   │   └── static
│   │   │       ├── NunitoSans_10pt-BlackItalic.ttf
│   │   │       ├── NunitoSans_10pt-Black.ttf
│   │   │       ├── NunitoSans_10pt-BoldItalic.ttf
│   │   │       ├── NunitoSans_10pt-Bold.ttf
│   │   │       ├── NunitoSans_10pt_Condensed-BlackItalic.ttf
│   │   │       ├── NunitoSans_10pt_Condensed-Black.ttf
│   │   │       ├── NunitoSans_10pt_Condensed-BoldItalic.ttf
│   │   │       ├── NunitoSans_10pt_Condensed-Bold.ttf
│   │   │       ├── NunitoSans_10pt_Condensed-ExtraBoldItalic.ttf
│   │   │       ├── NunitoSans_10pt_Condensed-ExtraBold.ttf
│   │   │       ├── NunitoSans_10pt_Condensed-ExtraLightItalic.ttf
│   │   │       ├── NunitoSans_10pt_Condensed-ExtraLight.ttf
│   │   │       ├── NunitoSans_10pt_Condensed-Italic.ttf
│   │   │       ├── NunitoSans_10pt_Condensed-LightItalic.ttf
│   │   │       ├── NunitoSans_10pt_Condensed-Light.ttf
│   │   │       ├── NunitoSans_10pt_Condensed-MediumItalic.ttf
│   │   │       ├── NunitoSans_10pt_Condensed-Medium.ttf
│   │   │       ├── NunitoSans_10pt_Condensed-Regular.ttf
│   │   │       ├── NunitoSans_10pt_Condensed-SemiBoldItalic.ttf
│   │   │       ├── NunitoSans_10pt_Condensed-SemiBold.ttf
│   │   │       ├── NunitoSans_10pt_Expanded-BlackItalic.ttf
│   │   │       ├── NunitoSans_10pt_Expanded-Black.ttf
│   │   │       ├── NunitoSans_10pt_Expanded-BoldItalic.ttf
│   │   │       ├── NunitoSans_10pt_Expanded-Bold.ttf
│   │   │       ├── NunitoSans_10pt_Expanded-ExtraBoldItalic.ttf
│   │   │       ├── NunitoSans_10pt_Expanded-ExtraBold.ttf
│   │   │       ├── NunitoSans_10pt_Expanded-ExtraLightItalic.ttf
│   │   │       ├── NunitoSans_10pt_Expanded-ExtraLight.ttf
│   │   │       ├── NunitoSans_10pt_Expanded-Italic.ttf
│   │   │       ├── NunitoSans_10pt_Expanded-LightItalic.ttf
│   │   │       ├── NunitoSans_10pt_Expanded-Light.ttf
│   │   │       ├── NunitoSans_10pt_Expanded-MediumItalic.ttf
│   │   │       ├── NunitoSans_10pt_Expanded-Medium.ttf
│   │   │       ├── NunitoSans_10pt_Expanded-Regular.ttf
│   │   │       ├── NunitoSans_10pt_Expanded-SemiBoldItalic.ttf
│   │   │       ├── NunitoSans_10pt_Expanded-SemiBold.ttf
│   │   │       ├── NunitoSans_10pt-ExtraBoldItalic.ttf
│   │   │       ├── NunitoSans_10pt-ExtraBold.ttf
│   │   │       ├── NunitoSans_10pt-ExtraLightItalic.ttf
│   │   │       ├── NunitoSans_10pt-ExtraLight.ttf
│   │   │       ├── NunitoSans_10pt-Italic.ttf
│   │   │       ├── NunitoSans_10pt-LightItalic.ttf
│   │   │       ├── NunitoSans_10pt-Light.ttf
│   │   │       ├── NunitoSans_10pt-MediumItalic.ttf
│   │   │       ├── NunitoSans_10pt-Medium.ttf
│   │   │       ├── NunitoSans_10pt-Regular.ttf
│   │   │       ├── NunitoSans_10pt-SemiBoldItalic.ttf
│   │   │       ├── NunitoSans_10pt-SemiBold.ttf
│   │   │       ├── NunitoSans_10pt_SemiCondensed-BlackItalic.ttf
│   │   │       ├── NunitoSans_10pt_SemiCondensed-Black.ttf
│   │   │       ├── NunitoSans_10pt_SemiCondensed-BoldItalic.ttf
│   │   │       ├── NunitoSans_10pt_SemiCondensed-Bold.ttf
│   │   │       ├── NunitoSans_10pt_SemiCondensed-ExtraBoldItalic.ttf
│   │   │       ├── NunitoSans_10pt_SemiCondensed-ExtraBold.ttf
│   │   │       ├── NunitoSans_10pt_SemiCondensed-ExtraLightItalic.ttf
│   │   │       ├── NunitoSans_10pt_SemiCondensed-ExtraLight.ttf
│   │   │       ├── NunitoSans_10pt_SemiCondensed-Italic.ttf
│   │   │       ├── NunitoSans_10pt_SemiCondensed-LightItalic.ttf
│   │   │       ├── NunitoSans_10pt_SemiCondensed-Light.ttf
│   │   │       ├── NunitoSans_10pt_SemiCondensed-MediumItalic.ttf
│   │   │       ├── NunitoSans_10pt_SemiCondensed-Medium.ttf
│   │   │       ├── NunitoSans_10pt_SemiCondensed-Regular.ttf
│   │   │       ├── NunitoSans_10pt_SemiCondensed-SemiBoldItalic.ttf
│   │   │       ├── NunitoSans_10pt_SemiCondensed-SemiBold.ttf
│   │   │       ├── NunitoSans_10pt_SemiExpanded-BlackItalic.ttf
│   │   │       ├── NunitoSans_10pt_SemiExpanded-Black.ttf
│   │   │       ├── NunitoSans_10pt_SemiExpanded-BoldItalic.ttf
│   │   │       ├── NunitoSans_10pt_SemiExpanded-Bold.ttf
│   │   │       ├── NunitoSans_10pt_SemiExpanded-ExtraBoldItalic.ttf
│   │   │       ├── NunitoSans_10pt_SemiExpanded-ExtraBold.ttf
│   │   │       ├── NunitoSans_10pt_SemiExpanded-ExtraLightItalic.ttf
│   │   │       ├── NunitoSans_10pt_SemiExpanded-ExtraLight.ttf
│   │   │       ├── NunitoSans_10pt_SemiExpanded-Italic.ttf
│   │   │       ├── NunitoSans_10pt_SemiExpanded-LightItalic.ttf
│   │   │       ├── NunitoSans_10pt_SemiExpanded-Light.ttf
│   │   │       ├── NunitoSans_10pt_SemiExpanded-MediumItalic.ttf
│   │   │       ├── NunitoSans_10pt_SemiExpanded-Medium.ttf
│   │   │       ├── NunitoSans_10pt_SemiExpanded-Regular.ttf
│   │   │       ├── NunitoSans_10pt_SemiExpanded-SemiBoldItalic.ttf
│   │   │       ├── NunitoSans_10pt_SemiExpanded-SemiBold.ttf
│   │   │       ├── NunitoSans_7pt-BlackItalic.ttf
│   │   │       ├── NunitoSans_7pt-Black.ttf
│   │   │       ├── NunitoSans_7pt-BoldItalic.ttf
│   │   │       ├── NunitoSans_7pt-Bold.ttf
│   │   │       ├── NunitoSans_7pt_Condensed-BlackItalic.ttf
│   │   │       ├── NunitoSans_7pt_Condensed-Black.ttf
│   │   │       ├── NunitoSans_7pt_Condensed-BoldItalic.ttf
│   │   │       ├── NunitoSans_7pt_Condensed-Bold.ttf
│   │   │       ├── NunitoSans_7pt_Condensed-ExtraBoldItalic.ttf
│   │   │       ├── NunitoSans_7pt_Condensed-ExtraBold.ttf
│   │   │       ├── NunitoSans_7pt_Condensed-ExtraLightItalic.ttf
│   │   │       ├── NunitoSans_7pt_Condensed-ExtraLight.ttf
│   │   │       ├── NunitoSans_7pt_Condensed-Italic.ttf
│   │   │       ├── NunitoSans_7pt_Condensed-LightItalic.ttf
│   │   │       ├── NunitoSans_7pt_Condensed-Light.ttf
│   │   │       ├── NunitoSans_7pt_Condensed-MediumItalic.ttf
│   │   │       ├── NunitoSans_7pt_Condensed-Medium.ttf
│   │   │       ├── NunitoSans_7pt_Condensed-Regular.ttf
│   │   │       ├── NunitoSans_7pt_Condensed-SemiBoldItalic.ttf
│   │   │       ├── NunitoSans_7pt_Condensed-SemiBold.ttf
│   │   │       ├── NunitoSans_7pt_Expanded-BlackItalic.ttf
│   │   │       ├── NunitoSans_7pt_Expanded-Black.ttf
│   │   │       ├── NunitoSans_7pt_Expanded-BoldItalic.ttf
│   │   │       ├── NunitoSans_7pt_Expanded-Bold.ttf
│   │   │       ├── NunitoSans_7pt_Expanded-ExtraBoldItalic.ttf
│   │   │       ├── NunitoSans_7pt_Expanded-ExtraBold.ttf
│   │   │       ├── NunitoSans_7pt_Expanded-ExtraLightItalic.ttf
│   │   │       ├── NunitoSans_7pt_Expanded-ExtraLight.ttf
│   │   │       ├── NunitoSans_7pt_Expanded-Italic.ttf
│   │   │       ├── NunitoSans_7pt_Expanded-LightItalic.ttf
│   │   │       ├── NunitoSans_7pt_Expanded-Light.ttf
│   │   │       ├── NunitoSans_7pt_Expanded-MediumItalic.ttf
│   │   │       ├── NunitoSans_7pt_Expanded-Medium.ttf
│   │   │       ├── NunitoSans_7pt_Expanded-Regular.ttf
│   │   │       ├── NunitoSans_7pt_Expanded-SemiBoldItalic.ttf
│   │   │       ├── NunitoSans_7pt_Expanded-SemiBold.ttf
│   │   │       ├── NunitoSans_7pt-ExtraBoldItalic.ttf
│   │   │       ├── NunitoSans_7pt-ExtraBold.ttf
│   │   │       ├── NunitoSans_7pt-ExtraLightItalic.ttf
│   │   │       ├── NunitoSans_7pt-ExtraLight.ttf
│   │   │       ├── NunitoSans_7pt-Italic.ttf
│   │   │       ├── NunitoSans_7pt-LightItalic.ttf
│   │   │       ├── NunitoSans_7pt-Light.ttf
│   │   │       ├── NunitoSans_7pt-MediumItalic.ttf
│   │   │       ├── NunitoSans_7pt-Medium.ttf
│   │   │       ├── NunitoSans_7pt-Regular.ttf
│   │   │       ├── NunitoSans_7pt-SemiBoldItalic.ttf
│   │   │       ├── NunitoSans_7pt-SemiBold.ttf
│   │   │       ├── NunitoSans_7pt_SemiCondensed-BlackItalic.ttf
│   │   │       ├── NunitoSans_7pt_SemiCondensed-Black.ttf
│   │   │       ├── NunitoSans_7pt_SemiCondensed-BoldItalic.ttf
│   │   │       ├── NunitoSans_7pt_SemiCondensed-Bold.ttf
│   │   │       ├── NunitoSans_7pt_SemiCondensed-ExtraBoldItalic.ttf
│   │   │       ├── NunitoSans_7pt_SemiCondensed-ExtraBold.ttf
│   │   │       ├── NunitoSans_7pt_SemiCondensed-ExtraLightItalic.ttf
│   │   │       ├── NunitoSans_7pt_SemiCondensed-ExtraLight.ttf
│   │   │       ├── NunitoSans_7pt_SemiCondensed-Italic.ttf
│   │   │       ├── NunitoSans_7pt_SemiCondensed-LightItalic.ttf
│   │   │       ├── NunitoSans_7pt_SemiCondensed-Light.ttf
│   │   │       ├── NunitoSans_7pt_SemiCondensed-MediumItalic.ttf
│   │   │       ├── NunitoSans_7pt_SemiCondensed-Medium.ttf
│   │   │       ├── NunitoSans_7pt_SemiCondensed-Regular.ttf
│   │   │       ├── NunitoSans_7pt_SemiCondensed-SemiBoldItalic.ttf
│   │   │       ├── NunitoSans_7pt_SemiCondensed-SemiBold.ttf
│   │   │       ├── NunitoSans_7pt_SemiExpanded-BlackItalic.ttf
│   │   │       ├── NunitoSans_7pt_SemiExpanded-Black.ttf
│   │   │       ├── NunitoSans_7pt_SemiExpanded-BoldItalic.ttf
│   │   │       ├── NunitoSans_7pt_SemiExpanded-Bold.ttf
│   │   │       ├── NunitoSans_7pt_SemiExpanded-ExtraBoldItalic.ttf
│   │   │       ├── NunitoSans_7pt_SemiExpanded-ExtraBold.ttf
│   │   │       ├── NunitoSans_7pt_SemiExpanded-ExtraLightItalic.ttf
│   │   │       ├── NunitoSans_7pt_SemiExpanded-ExtraLight.ttf
│   │   │       ├── NunitoSans_7pt_SemiExpanded-Italic.ttf
│   │   │       ├── NunitoSans_7pt_SemiExpanded-LightItalic.ttf
│   │   │       ├── NunitoSans_7pt_SemiExpanded-Light.ttf
│   │   │       ├── NunitoSans_7pt_SemiExpanded-MediumItalic.ttf
│   │   │       ├── NunitoSans_7pt_SemiExpanded-Medium.ttf
│   │   │       ├── NunitoSans_7pt_SemiExpanded-Regular.ttf
│   │   │       ├── NunitoSans_7pt_SemiExpanded-SemiBoldItalic.ttf
│   │   │       └── NunitoSans_7pt_SemiExpanded-SemiBold.ttf
│   │   ├── Open_Sans
│   │   │   ├── OFL.txt
│   │   │   ├── OpenSans-Italic-VariableFont_wdth,wght.ttf
│   │   │   ├── OpenSans-VariableFont_wdth,wght.ttf
│   │   │   ├── README.txt
│   │   │   └── static
│   │   │       ├── OpenSans-BoldItalic.ttf
│   │   │       ├── OpenSans-Bold.ttf
│   │   │       ├── OpenSans_Condensed-BoldItalic.ttf
│   │   │       ├── OpenSans_Condensed-Bold.ttf
│   │   │       ├── OpenSans_Condensed-ExtraBoldItalic.ttf
│   │   │       ├── OpenSans_Condensed-ExtraBold.ttf
│   │   │       ├── OpenSans_Condensed-Italic.ttf
│   │   │       ├── OpenSans_Condensed-LightItalic.ttf
│   │   │       ├── OpenSans_Condensed-Light.ttf
│   │   │       ├── OpenSans_Condensed-MediumItalic.ttf
│   │   │       ├── OpenSans_Condensed-Medium.ttf
│   │   │       ├── OpenSans_Condensed-Regular.ttf
│   │   │       ├── OpenSans_Condensed-SemiBoldItalic.ttf
│   │   │       ├── OpenSans_Condensed-SemiBold.ttf
│   │   │       ├── OpenSans-ExtraBoldItalic.ttf
│   │   │       ├── OpenSans-ExtraBold.ttf
│   │   │       ├── OpenSans-Italic.ttf
│   │   │       ├── OpenSans-LightItalic.ttf
│   │   │       ├── OpenSans-Light.ttf
│   │   │       ├── OpenSans-MediumItalic.ttf
│   │   │       ├── OpenSans-Medium.ttf
│   │   │       ├── OpenSans-Regular.ttf
│   │   │       ├── OpenSans-SemiBoldItalic.ttf
│   │   │       ├── OpenSans-SemiBold.ttf
│   │   │       ├── OpenSans_SemiCondensed-BoldItalic.ttf
│   │   │       ├── OpenSans_SemiCondensed-Bold.ttf
│   │   │       ├── OpenSans_SemiCondensed-ExtraBoldItalic.ttf
│   │   │       ├── OpenSans_SemiCondensed-ExtraBold.ttf
│   │   │       ├── OpenSans_SemiCondensed-Italic.ttf
│   │   │       ├── OpenSans_SemiCondensed-LightItalic.ttf
│   │   │       ├── OpenSans_SemiCondensed-Light.ttf
│   │   │       ├── OpenSans_SemiCondensed-MediumItalic.ttf
│   │   │       ├── OpenSans_SemiCondensed-Medium.ttf
│   │   │       ├── OpenSans_SemiCondensed-Regular.ttf
│   │   │       ├── OpenSans_SemiCondensed-SemiBoldItalic.ttf
│   │   │       └── OpenSans_SemiCondensed-SemiBold.ttf
│   │   └── Robot
│   │       ├── LICENSE.txt
│   │       ├── Roboto-BlackItalic.ttf
│   │       ├── Roboto-Black.ttf
│   │       ├── Roboto-BoldItalic.ttf
│   │       ├── Roboto-Bold.ttf
│   │       ├── Roboto-Italic.ttf
│   │       ├── Roboto-LightItalic.ttf
│   │       ├── Roboto-Light.ttf
│   │       ├── Roboto-MediumItalic.ttf
│   │       ├── Roboto-Medium.ttf
│   │       ├── Roboto-Regular.ttf
│   │       ├── Roboto-ThinItalic.ttf
│   │       ├── Roboto-Thin.ttf
│   │       └── Roboto.zip
│   ├── img
│   │   ├── clientes
│   │   │   ├── _13d107f6-c239-4047-be47-2980348b516b.jpeg
│   │   │   ├── _1e7b54b8-87fc-4681-b6f8-d4a46975fd59.jpeg
│   │   │   ├── cliente1.jpeg
│   │   │   ├── cliente2.jpeg
│   │   │   ├── cliente3.jpeg
│   │   │   ├── cliente4.jpeg
│   │   │   └── cliente5.jpeg
│   │   ├── icones
│   │   │   ├── administrador.png
│   │   │   ├── do-utilizador (1).png
│   │   │   ├── do-utilizador.png
│   │   │   ├── esquadro.png
│   │   │   ├── facebook.png
│   │   │   ├── favorito.png
│   │   │   ├── google-icon.png
│   │   │   ├── ícone-logo.png
│   │   │   ├── logotipo-da-apple.png
│   │   │   ├── mapmarker_120273.png
│   │   │   ├── painel-de-controle.png
│   │   │   ├── pessoa-icone.png
│   │   │   ├── pessoa.png
│   │   │   ├── predio.png
│   │   │   └── search-icon.png
│   │   ├── imoveis
│   │   │   ├── imovel10.jpg
│   │   │   ├── imovel11.jpg
│   │   │   ├── imovel12.jpg
│   │   │   ├── imovel13.jpg
│   │   │   ├── imovel14.jpg
│   │   │   ├── imovel15.jpg
│   │   │   ├── imovel16.jpg
│   │   │   ├── imovel17.jpg
│   │   │   ├── imovel18.jpg
│   │   │   ├── imovel19.jpg
│   │   │   ├── imovel1.jpg
│   │   │   ├── imovel20.jpg
│   │   │   ├── imovel21.jpg
│   │   │   ├── imovel22.jpg
│   │   │   ├── imovel23.jpg
│   │   │   ├── imovel24.jpg
│   │   │   ├── imovel25.jpg
│   │   │   ├── imovel26.jpeg
│   │   │   ├── imovel27.jpeg
│   │   │   ├── imovel28.jpeg
│   │   │   ├── imovel29.jpeg
│   │   │   ├── imovel2.jpg
│   │   │   ├── imovel30.webp
│   │   │   ├── imovel3.jpg
│   │   │   ├── imovel4.jpg
│   │   │   ├── imovel5.jpg
│   │   │   ├── imovel6.jpg
│   │   │   ├── imovel7.jpg
│   │   │   ├── imovel8.jpg
│   │   │   └── imovel9.jpeg
│   │   └── outros
│   │       ├── fachada-de-predio (1).jpg
│   │       ├── fachada-de-predio2.jpg
│   │       ├── fachada-de-predio3.jpg
│   │       ├── fachada-de-predio4.jpg
│   │       ├── fachada-de-predio.jpg
│   │       ├── Foto de perfil.jpeg
│   │       ├── Logo (1).png
│   │       └── Logo.png
│   └── libraries
│       └── slick-1.8.1
│           ├── bower.json
│           ├── component.json
│           ├── CONTRIBUTING.markdown
│           ├── index.html
│           ├── ISSUE_TEMPLATE.md
│           ├── LICENSE
│           ├── Makefile
│           ├── package.json
│           ├── README.markdown
│           ├── slick
│           │   ├── ajax-loader.gif
│           │   ├── config.rb
│           │   ├── fonts
│           │   │   ├── slick.eot
│           │   │   ├── slick.svg
│           │   │   ├── slick.ttf
│           │   │   └── slick.woff
│           │   ├── slick.css
│           │   ├── slick.js
│           │   ├── slick.less
│           │   ├── slick.min.js
│           │   ├── slick.scss
│           │   ├── slick-theme.css
│           │   ├── slick-theme.less
│           │   └── slick-theme.scss
│           └── slick.jquery.json
├── client-area
│   ├── controllers
│   │   └── processamento.php
│   ├── models
│   └── views
│       ├── cadastro.php
│       ├── components
│       │   ├── about.php
│       │   ├── header.php
│       │   ├── imoveis-locacao.php
│       │   ├── imoveis-venda.php
│       │   └── testimonials.php
│       ├── css
│       │   ├── cadastro.css
│       │   ├── login.css
│       │   └── style.css
│       ├── imovel.php
│       ├── index.php
│       ├── js
│       │   └── redirect.js
│       └── login.php
├── config
│   ├── bdGreenHouse.sql
│   ├── conexao.php
│   ├── registerUser.php
│   ├── search.php
│   └── userDao.php
├── documents
│   ├── autosave.chc
│   ├── bdGreenHouse.brM3
│   ├── bdGreenHouse.png
│   ├── brModelo.jar
│   ├── config.chc
│   ├── modelo-html-preview-55689.jpg
│   ├── README.md
│   └── Responsive Footer Section Design with HTML and CSS.png
├── index.php
└── tests
    ├── index.html
    ├── style.css
    ├── Test1
    │   └── index.html
    └── Test2
        └── index.html

47 directories, 521 files

