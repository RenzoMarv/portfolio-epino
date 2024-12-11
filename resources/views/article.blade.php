@extends('layouts.app')

@section('content')
    <div class="section-content">
    <img src="{{ asset('images/plag3.jpg') }}" alt="Plagiarism">
        <div class="text">
            <h1>What is Plagiarism?</h1>
            <p><b>Plagiarism</b> is when you use someone else’s ideas, work, or words without giving them credit, making it look like it’s your own. It can happen in different ways, like copying text exactly (direct plagiarism), changing some words but not giving credit (paraphrasing plagiarism), or using your own past work again without citing it (self-plagiarism). Plagiarism goes against academic honesty and fairness, and it can lead to serious consequences like failing grades, a damaged reputation, or even legal trouble if it breaks copyright laws. Since it’s so easy to find information online, plagiarism has become a bigger issue. That’s why it’s really important to always give credit to sources and use them responsibly, so we can keep the value of 
            original work and trust in academic and professional environments.</p>
        </div>

        <ul>
            <ul>
                <li><b>Report Cases of Plagiarism</b></li>
                <p>One notable case occurred in 2015 when Dr. R.L. Hizon, a prominent academic, was accused of plagiarizing portions of another scholar’s work in a research paper. This scandal sparked conversations about the prevalence of plagiarism in Filipino higher education, emphasizing the need for stricter enforcement of academic integrity policies. In 2020, the University of the Philippines (UP) also faced controversy when a faculty member was accused of copying content from a foreign research paper without proper attribution. This case highlighted gaps in plagiarism detection and the importance of raising awareness about academic honesty. Another high-profile instance involved Filipino journalist Carlos Celdran, who was accused of plagiarizing parts of his book in 2014. Although legal action wasn’t pursued, the scandal damaged Celdran's reputation and raised questions about the ethics of cultural and historical representation. Plagiarism is not limited to academic circles; it has also been a problem in Philippine politics, where politicians have been accused of copying speeches from foreign leaders or other local figures. The Philippines has laws to address intellectual property violations, such as the Intellectual Property Code of the Philippines (Republic Act No. 8293), which provides legal recourse for those whose work is plagiarized. However, despite these laws, there are ongoing challenges related to awareness and enforcement, especially in an age where digital content is easily accessible. Many Philippine universities, including the University of the Philippines, Ateneo de Manila, and De La Salle University, have implemented stricter academic integrity policies and use plagiarism detection software like Turnitin to combat this issue. While progress has been made, the challenge of preventing and addressing plagiarism remains ongoing, requiring continued education, stricter institutional policies, and a more robust legal framework to protect intellectual property and uphold academic and professional ethics in the country.</p>
            </ul>
            <ul>
                <div style="float: left; margin-right: 20px;">
                <img src="{{ asset('images/plag1.png<hr>') }}" alt="Plagiarism">
                </div>
                <li><b>Nature of Punishment</b></li>
                <p>The punishment for plagiarism varies across countries, reflecting differences in intellectual property (IP) laws and cultural attitudes towards academic integrity. In the United States, plagiarism is primarily addressed through civil penalties, where individuals found guilty may face significant damages or fines, ranging from $750 to $150,000 per infringing work, depending on whether the act is considered willful. In more severe cases, criminal penalties can result in fines and up to five years of imprisonment. The UK also imposes civil actions and criminal sanctions for plagiarism, with penalties including damages and fines, and for severe cases, up to 10 years of imprisonment under copyright law. In Australia, copyright infringement can lead to fines up to $60,000 for individuals and imprisonment for serious offenders, while academic plagiarism can result in expulsion. Countries like India and China enforce criminal penalties under their copyright laws, with fines and imprisonment for commercial infringements, while academic institutions impose penalties such as expulsion or revocation of degrees for plagiarists. In Japan, plagiarism is met with civil damages and criminal charges, potentially resulting in up to 10 years of imprisonment for significant violations. South Africa follows similar patterns, with both civil remedies for copyright infringement and academic consequences for students found guilty of plagiarism. Overall, while civil actions are common in many countries, criminal penalties are reserved for more serious or commercial cases, and academic institutions worldwide are taking a stronger stance on plagiarism, implementing severe disciplinary actions, including suspension and expulsion.</p>    
            </ul>
        </ul>
    </div>

   <!-- <div class="section-content">
        <div class="text">
            <h1>EDITORIAL: On plagiarism</h1>
            <h2>NASA Astrophysics Data System (ADS)</h2>
            <h3>2008-03-01</h3>
            <p>The case where plagiarism is admitted shall be instituted...</p>
        </div>
        <img src="{{ asset('images/plag1.png') }}" alt="Plagiarism">
    </div>-->
@endsection
