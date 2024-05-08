<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	   public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	public function index()
	{
		$this->load->view('Home');
	}
	public function product()
	{
		$this->load->view('product');
	}
		public function about()
	{
		$this->load->view('about');
	}
		public function error()
	{
		$this->load->view('error');
	}
	public function vision($id)
	{
		if($id==1)
		{
				$data['title']="Eye Anatomy";
				$data['content']='<h2 class="text-dark-gray">How does the eye work?</h2>
				
				<img src="'. base_url("images/young-woman-ophthalmologist-with-eye-chart.jpg").'" alt="" class="width-100 margin-45px-bottom">
				
				<p class="text-dark-gray">Though it may be small, the human eye is the most complex organ in our body, comprised of many parts that work together to convert light rays into information the brain can interpret.The cornea allows light to enter the eye and the iris controls the amount of light that reaches the back of the eye by adjusting the size of the pupil.The lens, which is located behind the pupil, further focuses the light and helps the eye to automatically focus on objects.The light then reaches the retina at the back of the eye, where images are converted into electronic signals that are transmitted to the brain through the optic nerve.</p>
				
				<img src="'. base_url("images/Human-Eye-Anatomy.jpg").'" alt="" class="width-100 margin-45px-bottom">
				
				<blockquote class="border-color-deep-pink">
					<ul class="text-dark-gray">
						<li><strong>Optic Nerve:</strong> The largest sensory nerve of the eye; it carries electrical impulses from photoreceptor cells (rods and cones) in the retina of the eye to the visual cortex in the brain. </li>
						<li><strong>Retina:</strong> The sensory membrane that lines the back of the eye. Photoreceptors in the retina convert light energy into electrical signals that are transmitted to the brain through the optic nerve.</li>
						<li><strong>Iris:</strong> The pigmented structure surrounding the pupil that determines eye color.  The iris increases and decreases the size of the pupil to regulate the amount of light entering the eye.</li>
						<li><strong>Pupil:</strong> The round, dark center of the eye that opens and closes to control the amount of light the retina receives.</li>
						<li><strong>Cornea:</strong> The clear portion of the front surface of the eye that allows light to enter the eye; the cornea provides most of the focusing power of the eye.</li>
						<li><strong>Lens:</strong> The clear, spherical part of the eye located behind the cornea that helps to focus light rays on the retina.</li>
						<li><strong>Vitreous body:</strong> The part of the eye between the lens and the retina, which contains a transparent, colorless gel called vitreous humor that fills the rear two-thirds of the eyeball.</li>
						<li><strong>Macula:</strong> The small, most sensitive area of the central retina that is responsible for visual acuity and color vision. </li>
					</ul>
				</blockquote>';
		}
		if($id==2)
		{
				$data['title']="Nearsighted";
				$data['content']='<h2 class="text-dark-gray">What does it mean to be nearsighted?</h2>
				
				<img src="'. base_url("images/marga-santoso-TjOc4u884yA-unsplash.jpg").'" alt="" class="width-100 margin-45px-bottom">
				
				<p class="text-dark-gray">Myopia is the medical term for what many call nearsightedness. A person with myopia, or nearsightedness, has the ability to view objects up-close, but has difficulty viewing objects in the distance. Typically, individuals who are nearsighted have difficulty seeing a TV screen clearly or reading distant highway signs, but have no issues seeing objects up close, such as reading on their mobile devices or tablets.
				</p>
				<h2 class="text-dark-gray">How common is nearsightedness?</h2>
				
				<p class="text-dark-gray">
				Nearsightedness is a common vision condition that has become more widespread. According to a 2009 study conducted by the National Eye Institute, nearsightedness grew from 25 percent of the U.S. population in 1971-1972 to 41.6 percent in 1999-2004.
				</p>
				
				<h2 class="text-dark-gray">Causes</h2>
				
				<p class="text-dark-gray">
				Nearsightedness is caused by the shape of the eye – either the eyeball is slightly too long or the cornea (the clear covering of the front of the eye) is too steeply curved. There is significant evidence that nearsightedness is inherited2. For example, if one or both parents are nearsighted, there is an increased chance that their children will develop myopia as well. However, the exact cause for this vision condition can’t be attributed to one factor.</p>
				
				<p class="text-dark-gray">
				Nearsightedness typically starts to develop in childhood and will usually stabilize in adulthood. The actual development of nearsightedness is dependent on how a person uses his or her eyes – people who spend significant time reading, viewing a computer or focusing on close-up tasks may be more likely to develop myopia. Many eye doctors believe that the significant increase in nearsighted vision is related to eye fatigue caused by computer use or spending large amounts of time focusing on close-up tasks3.</p>
				
				<h2 class="text-dark-gray">Symptoms</h2>
				
				<p class="text-dark-gray">If you are able to view close-up objects clearly, but have difficulty reading road signs or seeing objects in the distance, you may be nearsighted. Other symptoms of myopia may include squinting, eye strain and headaches, or feeling fatigued while driving or playing sports4. If you are experiencing any of these symptoms, consult an eyecare professional for a comprehensive eye exam.
				</p>
				
				<h2 class="text-dark-gray">Treatment</h2>
				
				<p class="text-dark-gray">
				Nearsightedness can be corrected with eyeglasses, contact lenses, or refractive surgery. Eyeglasses or contact lenses which are “minus” or concave in shape are used correct nearsightedness. Therefore, if you are nearsighted, your prescription will have a minus lens power (e.g., -2.50D). Depending on your prescription, you may only need to wear glasses for certain activities that require you to see from a long distance, such as watching a movie or driving.
				</p>';
		
		}
		if($id==3)
		{
				$data['title']="Farsighted";
				$data['content']='<img src="'. base_url("images/pexels-ksenia-chernaya-5752313.jpg").'" alt="" class="width-100 margin-45px-bottom">
				
				<h2 class="text-dark-gray">What does it mean to be Farsighted?</h2>
				
				
				<p class="text-dark-gray">Hyperopia, or “hypermetropia”, is the medical term for what many call farsightedness. A person with hyperopia, or farsightedness, has the ability to view objects in the distance, but has difficulty seeing objects up-close.
				</p>
				<h2 class="text-dark-gray">How common is farsightedness?</h2>
				
				<p class="text-dark-gray">
				Farsightedness is a common vision condition that affects about a quarter of the population. Many children are born farsighted and can “outgrow” the condition as their eyeball lengthens with normal growth1. Individuals with parents that are farsighted may also be more likely to develop the condition
				</p>
				
				<h2 class="text-dark-gray">Causes</h2>
				
				<p class="text-dark-gray">
				Hyperopia is caused by the shape of the eye – the eyeball is slightly too short, which prevents incoming light from focusing directly on the retina. Farsightedness occurs when the eyes try to focus images behind the retina instead of on the retina, which can result in blurred vision3. Farsightedness is sometimes confused with Presbyopia, a vision condition which also causes near vision to be blurred, but Presbyopia is a different vision condition that affects individuals ages 40 or over.</p>
				
				<p class="text-dark-gray">
				If you find yourself squinting or feeling eye fatigue when viewing objects at a close range, you may be farsighted. Other symptoms may include headaches or eye strain. If you are experiencing any of these symptoms, consult an eyecare professional for a comprehensive eye exam.</p>
				
				<h2 class="text-dark-gray">Treatment</h2>
				
				<p class="text-dark-gray">Farsighted vision can be corrected with eyeglasses or contact lenses to change the way light rays bend into the eyes4. If you are farsighted, your prescription will have a plus lens power (e.g. +2.50D). Depending on your prescription, you may need to wear eyeglasses or contacts either all the time or only when focusing on up close tasks, such as reading or working on a computer.
				</p>';
		
		}
		if($id==4)
		{
				$data['title']="Presbyopia";
				$data['content']='<img src="'. base_url("images/eye-problems-such-as-near-sighted.jpg").'" alt="" class="width-100 margin-45px-bottom">
				
				<h2 class="text-dark-gray">What is Presbyopia?</h2>
				
				
				<p class="text-dark-gray">If you’re over 40, you probably need glasses for reading. If not, chances are you will before long. The culprit is Presbyopia, a gradual, natural condition within the eye that reduces its ability to focus on near objects. Presbyopia is a very common eye condition – the World Health Organization estimates that more than one billion people in the world had presbyopia as of 20051.
				</p>
				
				<h2 class="text-dark-gray">Causes</h2>
				
				<p class="text-dark-gray">
				Virtually everyone of middle age has Presbyopia or will get it soon. When you are young, the lens of your eye is flexible, allowing for you to easily focus between objects near and far. However, as your eyes mature, the lens in your eye stiffens, which makes it harder to focus on objects up-close2.</p>
				
				<h2 class="text-dark-gray">Symptoms</h2>
				
				<p class="text-dark-gray">
				If you find yourself having to hold reading material farther than arm’s distance or have trouble seeing objects that are in close proximity, you may have Presbyopia. Other symptoms may include headaches and eye strain3. If you are experiencing any of these symptoms, consult an eye care professional for a comprehensive eye exam.</p>
				
				<h2 class="text-dark-gray">Treatment</h2>
				
				<p class="text-dark-gray">There are various eyewear options for correcting presbyopia. The older standard options are bifocals, trifocals and readers – each has advantages but many disadvantages. The newer, preferred eyewear to correct presbyopia is Progressive Lenses.
				<br>
				Bifocals are two-part lenses, with distance vision in the top and close-up vision in the bottom of the lens. The problem is that there is a visible line and “image jump,” which can be distracting and unattractive. Additionally, Bifocal lenses don’t provide a mid-range viewing area.
				<br>
				Trifocals are lenses divided into three segments: distance, intermediate and near viewing. These lenses have even more distracting lines that get in the way of good vision and good looks.
				<br>
				Readers are only used for up-close vision. For distance viewing, you need to remove them, peek over the top of your glasses or need another pair.
				<br>
				The newest, most popular solution is No-Line Progressive Lenses, which correct for distance, intermediate and near vision for more natural viewing without distracting, unattractive lines. Progressive Lenses have rapidly become the most popular choice for people who need reading correction but don’t want the drawbacks of the other, older eyewear options. Progressive lenses are designed for the way your eyes naturally view the world around you. The lower portion of the lens is for up-close, the middle is for intermediate vision and the upper portion gives you distance vision.
				</p>';
		}
		
		if($id==5)
		{
				$data['title']="Astigmatism";
				$data['content']='<img src="'. base_url("images/female-optician-measuring-her-sight.jpg").'" alt="" class="width-100 margin-45px-bottom">
				
				<h2 class="text-dark-gray">What is Astigmatism?</h2>
				
				
				<p class="text-dark-gray">Astigmatism is an eye condition that makes it difficult to see both distant objects and objects that are up-close, causing the objects to appear distorted or blurred. Astigmatism usually causes vision to be blurred or distorted to some degree at all distances.
				</p>
				
				<h2 class="text-dark-gray">Causes</h2>
				
				<p class="text-dark-gray">
				Individuals with astigmatism either have an unevenly curved cornea (the clear covering of the front of the eye) shaped more like a football than a basketball or an unevenly curved lens inside their eye. An irregularly shaped cornea or lens prevents light from focusing properly on the retina1. Instead of one focal point, an eye with astigmatism has multiple focal points, either in front of the retina or behind it (or both)2. Astigmatism can affect both children and adults – it often occurs early in life, but children who have astigmatism are often unaware of their vision being other than normal3.
				</p>
				
				<h2 class="text-dark-gray">Symptoms</h2>
				
				<p class="text-dark-gray">
				If you find that your vision is blurred or distorted when viewing both distant objects and objects that are up-close, you may have astigmatism. Symptoms of astigmatism include eye strain and headaches after reading or other extended visual tasks and/or squinting. It is especially important to schedule regular eye exams for children to detect astigmatism and other vision problems early – uncorrected astigmatism in children can have a great impact at school and during outdoor activities4.
				</p>
				
				<h2 class="text-dark-gray">Treatment</h2>
				
				<p class="text-dark-gray">Just like nearsightedness or farsightedness, astigmatism can be corrected with eyeglasses, contact lenses, or refractive surgery. Astigmatism can be corrected by eyeglasses with a cylinder shape built into the lenses at a certain angle. If you have astigmatism, your prescription will include a ‘cyl’ and axis.
				</p>';
		}
		if($id==6)
		{
				$data['title']="Eye Strain";
				$data['content']='<img src="'. base_url("images/stressed-male-massaging-nose-bridge-suffering-from-headache(2).jpg").'" alt="" class="width-100 margin-45px-bottom">
				
				<h2 class="text-dark-gray">What is eye strain?</h2>
				
				
				<p class="text-dark-gray">The term eye strain is frequently used by people to describe a group of vague symptoms that are related to use of the eyes. Eye strain is a symptom, not an eye disease. Eye strain occurs when your eyes get tired from intense use, such as driving a car for extended periods, reading, or working at the computer. If you have any eye discomfort caused by looking at something for a long time, you can call it eye strain.

Although eye strain can be annoying, it usually is not serious and goes away once you rest your eyes. In some cases, signs and symptoms of eye strain are a sign of an underlying eye condition that needs treatment. Although you may not be able to change the nature of your job or all the factors that can cause eye strain, you can take steps to reduce eye strain.
				</p>
				
				<h2 class="text-dark-gray">What causes eye strain?</h2>
				
				<p class="text-dark-gray">
				The medical term for eye strain is asthenopia. The symptoms of ocular fatigue, tired eyes, blurring, headaches, and occasionally doubling of the vision are brought on by concentrated use of the eyes for visual tasks. Some people, while concentrating on a visually intense task such as reading fine print, using the computer for hours at a time, or trying to see in the dark, unconsciously clench the muscles of their eyelids, face, temples, and jaws and develop discomfort or pain from overuse of those muscles. This may lead to a vicious cycle of tensing those muscles further and causing more distress. Other people attempting to do similar visual tasks may have no symptoms at all.

Common precipitating factors for the onset of eye strain include extended use of a computer or video monitor, straining to see in very dim light, and exposure to extreme brightness or glare. Many people will blink less than normal when performing extended visual tasks. This decreased blinking may lead to dryness of the ocular surface and symptoms of dry eyes.

Refractive errors (a need for glasses for distance or near vision, or both) may produce the symptoms of eye strain.

The inability to make both eyes work together in a binocular fashion may also generate the symptoms of eye strain. However, most individuals who have limited or no binocular vision have no such symptoms.

In people who already have headaches or blurring of vision due to eye strain, symptoms may be worsened by an underlying eye problem such as an eye muscle imbalance or a need for glasses for the correction of myopia, hyperopia, or astigmatism. Wearing glasses with an incorrect prescription may cause eye strain. In those who already have eye strain, not getting enough sleep, certain medications, being under stress, or being fatigued can also make those symptoms worse.
				</p>
				
				<h2 class="text-dark-gray">Symptoms</h2>
				
				<p class="text-dark-gray">
				If one asks patients who complain of eye strain to define what they mean by that term, they may describe nonspecific soreness of the eyes, mild tearing or dryness, blurring of vision, soreness of the back of the neck, doubling of vision, light sensitivity, difficulty focusing on images, tightness of the temples, forehead, brow area, or back of the head, or combinations of all of these. Headache is the most common symptom. It is usually mild, located in both temples, not pounding, and often relieved by stopping the visual task.
				</p>
				
				<h2 class="text-dark-gray">Treatment</h2>
				<p class="text-dark-gray">Eye strain is extremely common. As computer use has become commonplace, more people are experiencing what has been termed "computer vision syndrome," which is synonymous with eye strain. In most of these people, the symptoms are mild and they are aware that their feelings of the eyes being "tired" can be relieved by briefly closing their eyes and taking a break from the visual task they are performing. The symptoms will often be absent or markedly reduced on days when computer use is more limited.

Although eye strain is uncomfortable, there are no long-term consequences of eye strain. There is no evidence that eye strain causes any adverse changes in the eyes. There is also no evidence that, in adults, continuing to do visual tasks while experiencing eye strain will result in any structural damage to the eyes.

Eye strain, however, can be unpleasant and disruptive to your ability to concentrate and work. The symptoms of eye strain may lead to physical fatigue, decreased productivity, increased numbers of work errors, and anxiety.

If you feel that you are experiencing eye strain after extended reading, try to adjust your lighting to maximize illumination while minimizing glare, take frequent brief breaks from the visual task, and consciously blink a few extra times. Firmly massaging the temples with your fingers in a rotary fashion for a minute while closing your eyes is often helpful in relieving the symptoms.

If you experience eye strain while working at your computer, increasing the resolution of your screen (CRT) and reducing ambient lighting may be helpful. Adjusting the distance of your eyes from both the computer screen and your reading material may also relieve your symptoms. Changing brightness and contrast levels on your monitor and increasing text size can also be advantageous. Rather than keeping your eyes focused on the computer screen for hours at a time, interrupt this process every 15 minutes by briefly looking out of the window or around the room.

When performing extended visual tasks of all sorts, occasionally stand up, move about and stretch your arms, legs, back, neck, and shoulders.

If the symptoms of eye strain are predominantly those of dryness and increasing your blink frequency is not helpful, using an over-the-counter tear substitute a few times a day can be efficacious.

If all these home treatments dont work to relieve your eye strain symptoms, see your ophthalmologist.
				</p>';
		}
		$this->load->view('vision',$data);
	}
	public function yourvision()
	{
		$this->load->view('yourvision');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function droper()
	{
		$data['title']="Pharma Products";
		$this->load->view('droper',$data);
	}
		public function Claracor()
	{
	    $data['title']="Claracor";
	    $data['img']="images/Claracor.png";
		$this->load->view('product',$data);
	}
		public function MoxiD()
	{
	    $data['title']="Moxilux-D";
	    $data['img']="images/moxilusD.jpg";
	    $data['feature']="<h2>Special features:</h2><p><p>In post cataract surgury</p><ul>
	    <li>Moxifloxacin destroy the susceptible bacteria that cause ocular infection </li>
	    <p>In ocular infection with inflammation </p>
	    <li>Combination of powerful antbiotic &stronger steroid for safety of your cataract  patients.</li>
	   	</ul></p>
	   	<p><h6>Dexamethasone prevents  increase in inflammation
In:</h6>
	                      <ul>
                        <li>Post Cataract Surgery</li>
                        <li> Ocular inflammation associated with infection</li>
                       
                        </ul>
                    </p>";
		$this->load->view('product',$data);
	}
		public function MoxiLP()
	{
	    $data['title']="MoxiluxLP";
	    $data['img']="images/moxilusLP.jpg";
	      $data['feature']="<h2 >Special features:</h2><p><ul><li>Broad spectrum activity both gram +ve  & Gram-ve  bacteria </li>
	    <li>Superior corneal &aqueous penetration</li></ul>
	    <p>Loteprednol vs Prednisolone</p>
	    <ul>
	    <li>Similar anti inflammatory efficacy with less impact on IOP</li>
	    <li>Block Production of prostate glanding that cause Redness , Swelling and Itching</li>
	   </ul></p>";
		$this->load->view('product',$data);
	}
		public function Moxilux()
	{
	    $data['title']="Moxilux";
	    $data['img']="images/moxilus.jpg";
	    $data['feature']="
        <h2 >Special features:</h2><p><ul>
	    <li>Outbeats smartly gram +ve bacteria </li>
	    <li>Greater corneal permeation</li>
	    <li>Dual mode of action hence rapid eradication of pathogens</li>
	   
	    </ul></p>
	    <p><h6>Indication:</h6>
	                      <ul>
                        <li>Bacterial Conjunctivitis</li>
                        <li> Bacterial keratitis</li>
                        <li>Prophylaxis of  Endopthalmitis</li>
                        <li>Pre & Post Operatively</li>
                        </ul>
                    </p>
	    ";
		$this->load->view('product',$data);
	}
		public function Nepa()
	{
	    $data['title']="Nepalux";
	    $data['img']="images/nepalux.jpg";
	    $data['feature']="<h2 >Special features:</h2><p><ul>
	    <li>Better penetration in corneal & scleral tissue </li>
	    <li>Greter ocular bio available in the postentor chamber of the eye </li>
	    <li>Efficacious & safe in both anterior & posterior segments inflammation  post surgery </li>
	    <li>Help to increase visual rrecovy</li>
	    <li>Faster onset of action </li>
	   </ul></p>
	     <p><h6>Effective:</h6>
	                      <ul>
                        <li>Uniform smaller Perticle size</li>
                        <li>No Redness</li>
                     
                        </ul>
                    </p>
                    <p><h6>Safety:</h6>
	                      <ul>
                        <li> Better safety profile as compared to other NSAIDs due to Nepafenac's unique prodrug structure</li>
                       
                     
                        </ul>
                    </p>
	 ";
		$this->load->view('product',$data);
	}
		public function Ocufina()
	{
	    $data['title']="Ocufina";
	    $data['img']="images/ocufina.jpg";
	     $data['feature']="<h2 >Special features:</h2><p><p>Most common prescribded artificial tears</p><ul>
	    <li>Decreses symptoms of dry eyes </li>
	    <li>Helps corneal re epithelinazation </li>
	    <li>Decreas in the frequency  of subjective sympothoms </li>
	   </ul>
	   <p>For</p>
	   <ul>
	   <li>Dry eye syndrome</li>
	   <li>Computer user</li>
	   <li>Burning /stinging</li>
	   <li>Post lasik</li>
	   </ul>
	   <ul>
	   </ul></p>";
		$this->load->view('product',$data);
	}
		public function RestoreTF()
	{
	    $data['title']="Restore-TF";
	    $data['img']="images/tfbox.jpg";
	     $data['feature']="<h2 >Special features:</h2><p><p>Water retaining and wetting propities</p><ul>
	    <li>Polymeric structure binds large amount of water</li>
	    <li>Delay water evaporation and restored tear film</li>
	    <li>Efflectively moisturizer the eye surface</li>
	   </ul>
	   <p>Suitable for use with All Contact lenses</p>
	   <ul>
	   <li>Foster the migration of corneal epithelium cells</li>
	   <li>Promoter rapid wound healing and protection </li>
	   </ul>
	   <p>Mocoadhesive</p>
	   <ul>
	   <li>Effective stable  protective coating</li>
	   <li>Suitable for post cataract and lasik surgery</li>
	    </ul></p>";
		$this->load->view('product',$data);
	}
		public function Travotis()
	{
	    $data['title']="Travotis";
	    $data['img']="images/travotis.jpg";
	    $data['feature']="<h2 >Special features:</h2><p><ul>
	    <li>Increases the outflow of aqueous fluid  to lower intra ocular pressure by 25% to 32% with once daily doage</li>
	    <li>Helps reduce  pressure in your (ocular hypertension) that can lead to glaucoma</li>
	    <li>Prescribe as 1st line therapy</li>
	    </ul></p>
	    ";
		$this->load->view('product',$data);
	}
		public function Optiphob()
	{
	    $data['title']="Optiphob";
	    $data['img']="images/optihob-render.gif";
	    $data['feature']="<h2 >Special features:</h2>
	    <p>
	    <ul>
	    <li>Insertion through 2.2mm incision , Non wound Assist.</li>
	    <li>360° Posterior Square Edge with Height of 0.04mm Designed to minimise PCO.</li>
	    <li>Negative Aspheric Optics provides better contrast sensitivity.</li>
	    <li>Proven Haptic design provides excellent rotational and centrational stability.</li>
	    <li>High Refractive Index Material results in low centre thickness of IOL.</li>
	    <li>Smooth and controllable unfolding.</li>
	    </ul>
	    </p>";
	    $data['table']='<ul class="list-style-6 margin-twelve-left">
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Model Name:</label>DRVVB100SCA</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Specification:</label>UV/Blue Light Filtering</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Optic Diameter:</label>6.00 mm</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Overall Length:</label>13.00 mm</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Optic Design:</label>Negative Aspheric</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Haptics Diameter:</label>Modified C Loop Haptics</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Estimated A-constant:</label>118.5</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">ACD value:</label>5.28</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Sqaure Edge:</label>360&#176; square Edge</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Power Range:</label>-10.0D to +10.0D (in 1.0D Increment)<br> +11.0D to +30.0D (in 0.5D increment) <br>+31.0D to +36.0D (in 1.0D increment)</li> 
						    <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Angulation:</label>0&#176;</li>
							<li class="margin-5px-bottom"><label class="width-30 display-inline-block">Lens Material:</label>Hydrophobic Acrylic With Benzotriazole UV Absorber</li>
							<li class="margin-5px-bottom"><label class="width-30 display-inline-block">10% Cut Off Wavelength:</label>379nm</li>
							<li class="margin-5px-bottom"><label class="width-30 display-inline-block">Refractive Index:</label>1.56</li>
							<li class="margin-5px-bottom"><label class="width-30 display-inline-block">Visible Transmission (380-800nm)</label> >96%</li>
                        </ul>';
                   $data['material']='<p><h6>Contamac </h6>UK HI56 Hydrophobic Raw Material
HI56 has been specifically formulated to fulfill modern-day demands for a hydrophobic intraocular lens material that offers a unique combination of high refractive index, tensile strength and flexibility , for small incision and fast unfolding time.</p>';
	    $data['mat']='	<img style="position:absolute;width:70px;right:0;z-index: 111111;" src="images/mat.png">';
		$this->load->view('product',$data);
	}
		public function Optilux()
	{
	    $data['title']="Optilux";
	    $data['feature']="<h2 >Special features:</h2>
	    <p>
	    <ul>
	    <li>Insertion through 2.2mm incision , Non wound Assist.</li>
	    <li>360° Posterior Square Edge with Height of 0.04mm Designed to minimise PCO.</li>
	    <li>Negative Aspheric Optics provides better contrast sensitivity.</li>
	    <li>Proven Haptic design provides excellent rotational and centrational stability.</li>
	    <li>High Refractive Index Material results in low centre thickness of IOL.</li>
	    <li>Smooth and controllable unfolding.</li>
	    </ul>
	    </p>";
	     $data['table']='<ul class="list-style-6 margin-twelve-left">
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Model Name:</label>DRVVB100AUA</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Specification:</label>UV/Blue Light Filtering</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Optic Diameter:</label>6.00 mm</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Overall Length:</label>13.00 mm</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Optic Design:</label>Negative Aspheric</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Haptics Diameter:</label>Modified C Loop Haptics</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Estimated A-constant:</label>118.5</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">ACD value:</label>5.28</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Sqaure Edge:</label>360&#176; square Edge</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Power Range:</label>-10.0D to +10.0D (in 1.0D Increment)<br> +11.0D to +30.0D (in 0.5D increment) <br>+31.0D to +36.0D (in 1.0D increment)</li> 
						    <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Angulation:</label>0&#176;</li>
							<li class="margin-5px-bottom"><label class="width-30 display-inline-block">Lens Material:</label>Hydrophobic Acrylic With Benzotriazole UV Absorber</li>
							<li class="margin-5px-bottom"><label class="width-30 display-inline-block">10% Cut Off Wavelength:</label>379nm</li>
							<li class="margin-5px-bottom"><label class="width-30 display-inline-block">Refractive Index:</label>1.56</li>
							<li class="margin-5px-bottom"><label class="width-30 display-inline-block">Visible Transmission (380-800nm)</label> >96%</li>
                        </ul>';
	    $data['img']="images/OPTILUX.gif";
	     $data['material']='<p><h6>Contamac </h6>UK HI56 Hydrophobic Raw Material
HI56 has been specifically formulated to fulfill modern-day demands for a hydrophobic intraocular lens material that offers a unique combination of high refractive index, tensile strength and flexibility , for small incision and fast unfolding time.</p>';
	    $data['mat']='	<img style="position:absolute;width:100px;right:0;z-index: 111111;" src="images/mat.png">';
		$this->load->view('product',$data);
	}
		public function ensign_plus()
	{
	    $data['title']="Ensign Flex Yellow";
	    $data['feature']="";
	     $data['table']='
                        <ul class="list-style-6 margin-twelve-left">
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Model Name:</label>VVB805CLA</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Specification:</label>UV/Blue Light Filtering</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Optic Diameter:</label>6.00 mm</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Overall Length:</label>12.00 mm</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Optic Design:</label>Negative Aspheric</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Haptics Diameter:</label>Double Haptics</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Estimated A-constant:</label>118.0</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">ACD value:</label>4.96</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Sqaure Edge:</label>360&#176; square Edge</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Power Range:</label>-10.0D to +10.0D (in 1.0D Increment)<br> +11.0D to +30.0D (in 0.5D increment) <br>+31.0D to +36.0D (in 1.0D increment)</li> 
							<li class="margin-5px-bottom"><label class="width-30 display-inline-block">Refractive Index:</label>1.46</li>
							<li class="margin-5px-bottom"><label class="width-30 display-inline-block">Angulation:</label>5&#176;</li>
							<li class="margin-5px-bottom"><label class="width-30 display-inline-block">Material:</label>Hydrophilic Actrylic With 26% Water Constent</li>
                        </ul>
                    ';
	    $data['img']="images/ensign.jpg";
		$this->load->view('product',$data);
	}
	public function ensign_plus_c()
	{
	    $data['title']="Ensign Flex clear";
	    $data['feature']="";
	     $data['table']='
                        <ul class="list-style-6 margin-twelve-left">
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Model Name:</label>VVB805CLA</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Specification:</label>UV/Blue Light Filtering</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Optic Diameter:</label>6.00 mm</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Overall Length:</label>12.00 mm</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Optic Design:</label>Negative Aspheric</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Haptics Diameter:</label>Double Haptics</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Estimated A-constant:</label>118.0</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">ACD value:</label>4.96</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Sqaure Edge:</label>360&#176; square Edge</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Power Range:</label>-10.0D to +10.0D (in 1.0D Increment)<br> +11.0D to +30.0D (in 0.5D increment) <br>+31.0D to +36.0D (in 1.0D increment)</li> 
							<li class="margin-5px-bottom"><label class="width-30 display-inline-block">Refractive Index:</label>1.46</li>
							<li class="margin-5px-bottom"><label class="width-30 display-inline-block">Angulation:</label>5&#176;</li>
							<li class="margin-5px-bottom"><label class="width-30 display-inline-block">Material:</label>Hydrophilic Actrylic With 26% Water Constent</li>
                        </ul>
                    ';
	    $data['img']="images/ensign-2.jpg";
		$this->load->view('product',$data);
	}
		public function ensign_loop()
	{
	    $data['title']="Ensign C-Loop yellow";
	    $data['feature']="";
	     $data['table']='
                        <ul class="list-style-6 margin-twelve-left">
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Model Name:</label>VVB805CLA</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Specification:</label>UV/Blue Light Filtering</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Optic Diameter:</label>6.00 mm</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Overall Length:</label>12.00 mm</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Optic Design:</label>Negative Aspheric</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Haptics Diameter:</label>C-Loop Haptics</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Estimated A-constant:</label>118.0</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">ACD value:</label>4.96</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Sqaure Edge:</label>360&#176; square Edge</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Power Range:</label>-10.0D to +10.0D (in 1.0D Increment)<br> +11.0D to +30.0D (in 0.5D increment) <br>+31.0D to +36.0D (in 1.0D increment)</li> 
							<li class="margin-5px-bottom"><label class="width-30 display-inline-block">Refractive Index:</label>1.46</li>
							<li class="margin-5px-bottom"><label class="width-30 display-inline-block">Angulation:</label>5&#176;</li>
							<li class="margin-5px-bottom"><label class="width-30 display-inline-block">Material:</label>Hydrophilic Actrylic With 26% Water Constent</li>
                        </ul>
                    ';
	    $data['img']="images/ensign-loopy.jpg";
		$this->load->view('product',$data);
	}
		public function ensign_loop_c()
	{
	    $data['title']="Ensign C-Loop clear";
	    $data['feature']="";
	     $data['table']='
                        <ul class="list-style-6 margin-twelve-left">
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Model Name:</label>VVB805CLA</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Specification:</label>UV/Blue Light Filtering</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Optic Diameter:</label>6.00 mm</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Overall Length:</label>12.00 mm</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Optic Design:</label>Negative Aspheric</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Haptics Diameter:</label>C-Loop Haptics</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Estimated A-constant:</label>118.0</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">ACD value:</label>4.96</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Sqaure Edge:</label>360&#176; square Edge</li>
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">Power Range:</label>-10.0D to +10.0D (in 1.0D Increment)<br> +11.0D to +30.0D (in 0.5D increment) <br>+31.0D to +36.0D (in 1.0D increment)</li> 
							<li class="margin-5px-bottom"><label class="width-30 display-inline-block">Refractive Index:</label>1.46</li>
							<li class="margin-5px-bottom"><label class="width-30 display-inline-block">Angulation:</label>5&#176;</li>
							<li class="margin-5px-bottom"><label class="width-30 display-inline-block">Material:</label>Hydrophilic Actrylic With 26% Water Constent</li>
                        </ul>
                    ';
	    $data['img']="images/ensign-loop.jpg";
		$this->load->view('product',$data);
	}
		public function clarecor()
	{
	    $data['title']="Clarecor";
	     $data['feature']='<p>Sodium Hyaluronate 1.4% w/v Ophthalmic Solution<h2>Special features:</h2>
    <h6>[Exceptional High Viscosity Cohesive OVD]</h6>
        <ul>
        <li> Excellent Endothelial cell protection</li>
        <li> Ultra Purified, Latex Free & Non Animal Source</li></li>
        <li> Unique Viscoelastic and Pseudoplastic properties to stabilise Anterior Chamber</li>
        <li> Latest technology in glass vial pre filled syringe</li>
        </ul>
    </p>
        <p><h6>Indicated in:</h6>
        <ul>
            <li>Cataract Extraction</li>
            <li> IntraOcular Lens(IOL) implantation
             Corneal Transplant Surgery</li>
            <li>Surgical Procedures to reattach the Retina</li>
            <li>Vitrectomy</li>
            <li> Glaucoma Filtering Surgery</li>
        </ul>
        </p>
        <ul>
            <li>Bubble Free</li>
            <li>Rm From japan</li>
            <li>High Viscosity</li>
              <li>Store at Room Temperature</li>
        </ul>';
	   
	    $data['img']="images/clarecor.jpg";
		$this->load->view('product',$data);
	}
}
