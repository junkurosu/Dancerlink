@extends('layouts.app')
@include('layouts.part')

@section('child-title')利用規約@endsection
@section('child-description')利用規約@endsection
@section('breadcrumb')
{{ Breadcrumbs::render('policy') }}
@stop

@section('meta')
<meta name="robots" content="nofollow,noindex">
@stop



@section('content')
<div class="panel panel-default">
    <div class="panel-heading"><h1>利用規約</h1></div>

    <div class="panel-body">
       <p>第1条　はじめに</p>
       <p></p>
       <p>1 この利用規約（以下「本規約」といいます。）は、（以下「当社」といいます）が本サイト及び関連サイト上で提供するサービス（以下「本サービス及び関連サービス」といいます。）を、ユーザーが利用する場合の一切の行為に適用されます。</p>
       <p></p>
       <p>2 本規約は、本サービス及び関連サービスの利用条件を定めるものです。ユーザーは、本規約に同意の上、本規約に従い本サービス及び関連サービスを利用するものとします。</p>
       <p></p>
       <p>3 ユーザーは、本サービス及び関連サービスを利用することにより、本規約の全ての記載内容について同意したものとみなします。</p>
       <p></p>
       <p></p>
       <p>第2条　定義</p>
       <p></p>
       <p>本規約において使用する用語の意義は、次の各号に定めるとおりとします。</p>
       <p></p>
       <p>1「本サイト」とは、当社が運営する「{{config('app.name')}}」と称するウェブサイト（PCサイト{{url('/')}}、モバイルサイト{{url('/')}}、スマートフォンサイト{{url('/')}}）をいいます。</p>
       <p></p>
       <p>2 「本サービス」とは、本サイト上で提供される全てのサービスをいいます。</p>
       <p>3 「ユーザー」とは、本サイトを利用するために会員登録している者をいいます。</p>
       <p>4 「登録メールアドレス」とは、本サービスの提供を受ける目的で、ユーザーが当社に提供したメールアドレスの情報をいいます。</p>
       <p>5 「パスワード」とは、本サービスを利用するに当たって、登録メールアドレスと照合して本人を識別するための文字列をいいます。</p>
       <p></p>
       <p></p>
       <p>第3条　本規約の範囲</p>
       <p></p>
       <p>1 本サイトは、本規約及びその他の利用規約等において、本サービスの利用条件が規定されています。その他の利用条件等は名称の如何に関わらず本規約の一部を構成するものとします。</p>
       <p>2 本規約の規定とその他の利用条件等の規定に齟齬が生じる場合は、当該その他の利用条件等が優先して適用されるものとします。</p>
       <p></p>
       <p></p>
       <p>第4条　本規約の変更</p>
       <p></p>
       <p>1 本規約は、当社の判断により、いつでも任意に変更することができるものとします。</p>
       <p>2 変更後の利用規約は、当社が別途定める場合を除き、本サイト上に表示した時点より効力を生じるものとします。</p>
       <p>3 本規約の変更の効力が生じた後にユーザーが本サービスを利用した場合には、変更後の利用規約の全てにつき、同意したものとみなします。</p>
       <p></p>
       <p></p>
       <p>第5条　個人情報の取扱い</p>
       <p></p>
       <p>当社は、個人情報を「プライバシーポリシー」に基づき、適切に取り扱うものとします。</p>
       <p></p>
       <p></p>
       <p>第6条　通信の秘密</p>
       <p></p>
       <p>1 当社は、電気通信事業法（昭和59年法律第86号）第4条に基づき、ユーザーの通信の秘密を守ります。</p>
       <p>2 当社は、次の各号に掲げる場合には、当該各号に定める範囲内において前項の守秘義務を負わないものとします。</p>
       <p>　</p>
       <p>　1 刑事訴訟法（昭和23年法律第131号）又は犯罪捜査のための通信傍受に関する法律（平成11年法律第137号）の定めに基づく強制の処分又は裁判所の命令が行われた場合は、当該処分又は裁判所の命令の定める範囲内</p>
       <p>　2 法令に基づく強制的な処分が行われた場合は、当該処分又は命令の定める範囲内</p>
       <p>　3 特定電気通信役務提供者の損害賠償責任の制限及び発信者情報の開示に関する法律（平成13年法律第137号）第4条に基づく開示請求の要件が充足されたと当社が判断した場合は、当該開示請求の範囲内</p>
       <p>　4 他人の生命、身体又は財産の保護のために必要があると当社が判断した場合は、他人の生命、身体又は財産の保護のために必要な範囲内</p>
       <p></p>
       <p></p>
       <p>第7条　入会及び入会申込に対する不承諾</p>
       <p></p>
       <p>1 本サービスの利用を希望する者は、本規約の内容に同意した上で、当社所定の方法により、入会の申込を行うものとします。</p>
       <p>2 入会の申込をした者（以下「入会申込者」といいます。）は、当社が入会の申込を承諾した時点でユーザーになります。</p>
       <p>3 当社が次のいずれかに該当する場合は、当社の任意の判断により、理由を開示することなく入会申込者の入会申込を承諾しないことができます。</p>
       <p></p>
       <p>　1 入会申込者が、前条第2項の方法によらずに入会の申込を行った場合</p>
       <p>　2 入会申込者が、過去に本規約又はその他の利用規約等に違反したことを理由として強制退会処分を受けた者である場合</p>
       <p>　3 入会申込者が、未成年で、本人の同意の他、保護者の同意がない場合</p>
       <p>　4 その他当社が不適切と判断した場合</p>
       <p></p>
       <p></p>
       <p>第8条　退会</p>
       <p></p>
       <p>1 ユーザーが退会を希望する場合には、ユーザーは、当社所定の方法により、当社に退会の申出を行うものとします。</p>
       <p>2 当社は、ユーザーが次の各号に掲げるいずれかの行為を行った場合には、当社の任意の判断によって、ユーザーを強制的に退会させて本サービス及び関連サービスの利用をお断りすることができます。</p>
       <p></p>
       <p>　1 第7条第2項の方法によらずに入会の申込を行ったことが明らかとなった場合</p>
       <p>　2 本規約又はその他の利用条件等に違反した場合</p>
       <p>　3 その他当社が不適切と判断した場合</p>
       <p></p>
       <p></p>
       <p>第9条　登録メールアドレス、ID及びパスワードの管理等</p>
       <p></p>
       <p>1 ユーザーは、自分の管理に属する使用可能なメールアドレスを登録メールアドレスとして登録するものとし、当該登録メールアドレスが自己の管理に属さなくなった場合には、自己の管理に属する使用可能な別のメールアドレスに変更しなければならないものとします。</p>
       <p>2 ユーザーは、自己の登録メールアドレス、パスワード及びIDの不正利用の防止に努めるとともに、その管理について一切の責任を負うものとします。</p>
       <p>3 登録メールアドレス、パスワード及びIDが第三者に利用されたことによって生じた損害等につきましては、当社はいかなる責任も負いません。</p>
       <p>4 ユーザーは、自己が作成した画像、テキスト等の一切のデータを自己の責任において管理・保存するものとします。</p>
       <p>5 本サービスにアップロードされた画像、テキスト等のデータは、ユーザー自身が適宜バックアップを取るなどの手法で保存するものとし、当社は画像、テキスト等のデータの保存等について一切保証しないものとします。</p>
       <p></p>
       <p></p>
       <p>第10条　アカウントの保有</p>
       <p></p>
       <p>1 ユーザーは1人につき1つのアカウントを保有するものとします。但し、作品や名義による使い分けなど、本サービスでの活動に必要性がある場合においては、その他の利用規約に反しない範囲において複数アカウントの保有を認めるものとします。</p>
       <p>2 ユーザーはいかなる場合においても、アカウントを第三者に譲渡又は貸与することはできません。</p>
       <p></p>
       <p></p>
       <p>第11条　利用環境の整備</p>
       <p></p>
       <p>1 本サービスを利用するために必要なあらゆるハード・ソフトウェア等の整備は、ユーザーの負担と責任において行うものとします。</p>
       <p>2 ユーザーは自己の利用環境に応じて、コンピューター・ウィルスの感染の防止、不正アクセス及び情報漏洩の防止等の対策を講じるものとします。</p>
       <p>3 当社はユーザーの利用環境について一切関与せず、また一切の責任を負いません。</p>
       <p></p>
       <p></p>
       <p>第12条　ユーザーの責任</p>
       <p></p>
       <p>1 ユーザーは、自己の責任において本サービスを利用するものとし、本サービスを利用してなされた一切の行為及びその結果について一切の責任を負います。</p>
       <p>2 本サービスを利用してユーザーが投稿した投稿作品の情報に関する責任は、全てユーザーに帰属します。当社はユーザーが本サービスを利用して投稿した投稿作品の情報の内容について、一切責任を負いません。</p>
       <p>3 ユーザーが他人の名誉を毀損した場合、プライバシー権を侵害した場合、許諾なく第三者の個人情報を開示した場合、著作権法に違反する行為を行った場合そのほか他人の権利を侵害した場合には、当該ユーザーは自身の責任と費用においてこれを解決しなければならず、当社は一切の責任を負いません。</p>
       <p></p>
       <p></p>
       <p>第13条　禁止行為</p>
       <p></p>
       <p>ユーザーは、本サービスの利用にあたり、以下の各号に該当する事項を行ってはならないものとします。</p>
       <p>禁止行為に違反した場合には、強制退会、利用停止、投稿作品のデータの全部もしくは一部の削除、又は公開範囲の変更等の不利益な措置を採ることがあります。（但し、当社はこれらの措置をとる義務を負うものではなく、また、これらの措置を講じた理由を開示する義務を負うものではありません。）</p>
       <p></p>
       <p>1 当社もしくは第三者の著作権、意匠権等の知的財産権、その他の権利を侵害する行為、又は侵害する恐れのある行為。</p>
       <p>2 本サイトにアップロードされている投稿作品の情報を、当該著作者（創作者）の同意なくして転載する行為。</p>
       <p>3 当社もしくは第三者の財産、プライバシーもしくは肖像権を侵害する行為、又は侵害する恐れのある行為。</p>
       <p>4 当社もしくは第三者を不当に差別もしくは誹謗中傷し、第三者への不当な差別を助長し、又はその名誉もしくは信用を毀損する行為。</p>
       <p>5 詐称行為。</p>
       <p>6 詐欺その他の犯罪に結びつく、又は結びつく恐れのある行為。</p>
       <p>7 法律・条例・その他当社が定める基準に反するような、わいせつ、児童ポルノ又は児童虐待に相当する投稿作品のデータ（以下「これらのデータ」といいます。）について、次に掲げるいずれかの行為を行うこと。</p>
       <p>　1 これらのデータを投稿又は表示する行為。</p>
       <p>　2 これらのデータを収録した媒体を販売する行為。</p>
       <p>　3 これらのデータを収録した媒体の送信、表示、販売を想起させる広告を投稿又は表示する行為。</p>
       <p>8 自殺・自傷行為・薬物乱用などを美化・誘発・助長する恐れのある行為。</p>
       <p>9 次に掲げる内容の投稿作品のデータを投稿する行為。</p>
       <p>　1 アップされている投稿作品を誹謗中傷する内容の情報。</p>
       <p>　2 投稿者の氏名、住所、勤務先、電話番号等個人を特定しうる内容の情報（アップされた投稿作品に関する情報と照らし合わせることで個人を特定しうる場合を含む。）。</p>
       <p>　3 真否についての事実確認が困難な内容や虚偽の内容の情報。</p>
       <p>　4 その他当社が不適切と判断する内容の情報。</p>
       <p>10 運営者に成りすます行為</p>
       <p>11 複数のIDを取得する行為。但し、第10条において特に認めた場合を除く。</p>
       <p>12 商業用の広告、宣伝又は勧誘を目的とする投稿作品の情報（当社が特に認めたものを除く。）、アフィリエイトのリンクを含む投稿作品の情報、MLM・リードメール等他人を勧誘する内容の投稿作品の情報、アダルトサイト・ワンクリック詐欺サイト・ウィルス等の有害なコンピュータプログラム等を流布させることを目的とするサイト等当社が不適切と判断するサイトに誘導する投稿作品の情報（単にリンクを張る行為を含む。）、その他当社が不適切と判断する投稿作品の投稿する行為。</p>
       <p>13 人種・民族・性別・年齢・思想などによる差別に繋がる表現を使用する行為。</p>
       <p>14 通常の範囲を超えて本サービスのサーバーに負担をかける行為、もしくは、本サービスの運営やネットワーク・システムに支障を与える行為、又はこれらの恐れのある行為。</p>
       <p>15 当社の設備に蓄積された情報を不正に書き換え、又は消去する行為。</p>
       <p>16 ウィルス等の有害なコンピュータプログラム等を送信又は掲載する行為。</p>
       <p>17 このサイトのソースコードを当社の許可なくコピー、または変革して使用する行為。</p>
       <p>18 法令、公序良俗又は本規約もしくはその他の利用条件等に違反し、又は他者の権利を侵害すると当社が判断する行為。</p>
       <p>19 R15・R18の内容が含まれる作品を、適切なレート設定をせずに投稿する行為</p>
       <p>20 R指定されている作品を、その年齢未満の方が投稿・閲覧する行為</p>
       <p>21 その他、当社が不適切と判断する行為。</p>
       <p></p>
       <p></p>
       <p>第14条　サービスの変更等</p>
       <p></p>
       <p>1 当社は、事前の予告なくして、本サービスをいつでも任意の理由で追加、変更、中断、終了することができます。</p>
       <p>2 当社は、本サービスの追加、変更、中断、終了に関し、一切の責任をおいません。</p>
       <p></p>
       <p></p>
       <p>第15条　利用料金</p>
       <p></p>
       <p>1 登録及び本サービスは無料とします。</p>
       <p>2 有料サービスの内容・利用料金、支払方法等については、別途有料サービス利用規約の定めることとします。</p>
       <p></p>
       <p></p>
       <p>第16条　投稿作品の情報に関する権利</p>
       <p></p>
       <p>本サービスを利用して投稿作品の情報を投稿するユーザーは、当社に対し、当該投稿作品の情報が第三者の権利を侵害するものでないこと保証するものとします。</p>
       <p>万一、ユーザーが投稿した投稿作品が第三者の権利を侵害するなど第三者との間で何らかの紛争が発生した場合には、当該ユーザーの費用と責任において問題を解決するとともに、当社に何等の損害を与えないものとします。</p>
       <p></p>
       <p></p>
       <p>第17条　知的財産権の帰属及び使用許諾</p>
       <p></p>
       <p>1 本サービスに付随する情報、サービス、及びプログラム等に関する知的財産権及びその他の権利は当社らに帰属しております。</p>
       <p>2 本サービスを利用して投稿された投稿作品の情報の著作権その他一切の権利は、当該投稿作品を創作したユーザー及び当社らに帰属します。</p>
       <p>3 当社は、ユーザーが投稿する投稿作品の情報を、本サービスの円滑な提供、利用促進、広告・宣伝、当社システムの構築、改良、メンテナンスに必要な範囲内で、無償かつ非独占的に使用及び改変等をすることができるものとし、会員はこれを許諾するものとします。</p>
       <p>4 当社が前項に定める形で投稿作品の情報を使用するにあたっては、情報の一部又は氏名表示を省略することができるものとします。</p>
       <p>5 当社は、「XPちゃんねる」に投稿された投稿作品の情報について、任意に選定し、選定された投稿作品の情報を本サイト及び関連サイト上で講評することができます。会員は、当該選定・講評等のために投稿した投稿作品の情報を使用すること、講評することに同意するものとします。</p>
       <p></p>
       <p></p>
       <p>第18条　免責事項</p>
       <p></p>
       <p>1 当社は、ユーザー間の通信等に関与しません。万一ユーザー間の紛争があった場合でも、当該ユーザー間で解決するものとし、当社はその責任を一切負いません。</p>
       <p>2 当社は、当社が必要と判断した場合は、ユーザーに通知することなくいつでも本サービスを変更、停止、又は中止することができます。この場合、当社は、本サービスの変更等により生じたいかなる損害についても、一切責任を負いません。アクセス過多、その他予期せぬ要因で表示速度の低下や障害等が生じた場合も同様とします。</p>
       <p>3 当社は、ユーザーによって投稿される投稿作品の情報を管理・保存する義務を負いません。</p>
       <p>4 当社は、ユーザーによって投稿される投稿作品の情報について、適法性、正確性等に関し一切の責任を負いません。ユーザーによって投稿される投稿作品の情報が、当該ユーザーが所属する法人・団体等の内部規則等に関する適否についても、一切の責任を負いません。</p>
       <p>5 当社は、以下に掲げる場合には、当該投稿作品の情報の内容を閲覧したり、保存したり、第三者に開示すること（以下、本項において「閲覧等」と言います。）ができるものとします。当社は、それによってユーザーに生じたいかなる損害についても、一切責任を負いません。</p>
       <p>　1 当社が投稿作品の情報を投稿したユーザーの登録メールアドレスに宛てて閲覧等の同意を求める電子メールを送信した場合であって、次の各号に掲げるいずれかに該当するとき。</p>
       <p>　2 ユーザーが閲覧等に同意したとき。</p>
       <p>　3 当社が閲覧等の同意を求める電子メールを送信してから7日以内に、当該ユーザーの電子メールでの回答が当社のメールサーバに到達しなかったとき。ただし、緊急止むを得ない事由が生じたときは除く。</p>
       <p>　4 本サービスの技術的不具合の原因を解明し、解消するため必要な場合。</p>
       <p>　5 裁判所、警察等の公的機関から、法令に基づく正式な照会を受けた場合。</p>
       <p>　6 本規約、その他の利用条件等に違反する行為又はその恐れのある行為が行われ、投稿作品の情報の内容を確認する必要が生じたと当社が判断した場合。</p>
       <p>　7 人の生命、身体及び財産などに差し迫った危険があり、緊急の必要性があると当社が判断した場合。</p>
       <p>　8 その他本サイトを適切に運営するために必要が生じた場合。</p>
       <p>6 当社は、本規約又はその他の利用条件等に違反する行為又はその恐れのある行為が行われたと信じるに足りる相当な理由があると判断した場合には、当該行為を行ったユーザーの強制退会処分、投稿作品の情報の全部もしくは一部の削除、及び公開範囲の変更等を行う場合がありますが、それによって生じたいかなる損害についても、一切責任を負いません。</p>
       <p></p>
       <p></p>
       <p>第19条　削除権限</p>
       <p></p>
       <p>当社は、次に掲げる場合には、投稿作品の情報の違法性・規約違反の有無に関わらず、関連する投稿作品の情報について、その全部もしくは一部の削除又は公開範囲の変更等の措置を行うことができるものとします（但し、当社はこれらの措置をとる義務を負うものではなく、また、これらの措置を講じた理由を開示する義務を負うものではありません。）。</p>
       <p></p>
       <p>1 猥褻性があると当社が判断した投稿作品の情報が投稿された場合。</p>
       <p>2 公的な機関又は専門家（国、地方公共団体、特定電気通信役務提供者の損害賠償責任の制限及び発信者情報の開示に関する法律のガイドラインに規定された信頼性確認団体、インターネット・ホットライン、弁護士等を言います。）から、投稿作品の情報について、違法、公序良俗違反又は他人の権利を侵害する等の指摘・意見表明があった場合。</p>
       <p>3 投稿作品の情報について、第三者から権利主張があった場合。</p>
       <p>4 投稿された投稿作品の情報が第三者の著作権を侵害すると当社が判断した場合。</p>
       <p></p>
       <p></p>
       <p>第20条　本規約及びその他の利用規約等の有効性</p>
       <p></p>
       <p>1 本規約及びその他の利用条件等の規定の一部が法令に基づいて無効と判断されても、本規約及びその他の利用条件等のその他の規定は有効とします。</p>
       <p>2 利用規約等の規定の一部があるユーザーとの関係で無効とされ、又は取り消された場合でも、利用規約等はその他のユーザーとの関係では有効とします。</p>
       <p></p>
       <p></p>
       <p>第21条　違反行為等への処置</p>
       <p></p>
       <p>1 ユーザーが本規約又はその他の利用条件等に違反したと認められる場合、その他当社が必要と認める場合は、当社は当該ユーザーに対し以下の処置を講ずることがあります（但し、当社はこれらの措置をとる義務を負うものではなく、また、これらの措置を講じた理由を開示する義務を負うものではありません。）。</p>
       <p>　1 投稿作品の情報の削除・訂正を求めること。</p>
       <p>　2 投稿作品の情報の全部もしくは一部を削除し、公開範囲を変更し、又は閲覧できない状態にすること。</p>
       <p>　3 強制退会処分とすること。</p>
       <p>　4 入会申込を承諾しないこと。</p>
       <p>2 ユーザーは、前項の当社の処置について異議を述べないこととします。</p>
       <p></p>
       <p></p>
       <p>第22条　準拠法及び管轄裁判所</p>
       <p>1 本規約の準拠法は、日本法とします。</p>
       <p>2 ユーザーと当社の間で訴訟の必要が生じた場合、東京地方裁判所を第一審の専属的合意管轄裁判所とします。</p>
       <p></p>
       <p></p>
       <p>附則</p>
       <p>•本規約は、2018年3月16日から施行します。</p>
       <p>•本規約の施行前にユーザーによって行われた行為についても本規約が適用されます。</p>


   </div>
</div>
@endsection
